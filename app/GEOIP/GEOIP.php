<?php

namespace App\GEOIP;

use Illuminate\Support\Facades\Redis;

use App\Helpers\Http;

/**
 * Detect user location by IP address
 */
class GEOIP {

    /**
     * Default redis key
     * @param str
     */
    private $redisKey = 'GEOIP:';

    /**
     * User IP
     * @param str
     */
    protected $IP;

    /**
     * User country code
     * @param str
     */
    protected $countryCode;

    /**
     * User IATA code
     * @param str
     */
    protected $IATA;

    /**
     * User country name
     * @param str
     */
    protected $country;

    /**
     * User city name
     * @param str
     */
    protected $city;

    public function __construct($IP)
    {
        $this->IP = $IP;
    }

    /**
     * Get user location by GEOIP
     * @return obj
     */
    public function getLocation()
    {
        if ($location = Redis::get($this->redisKey . $this->IP)) {
            $location = unserialize($location);

            $this->countryCode = $location->countryCode;
            $this->IATA        = $location->IATA;
            $this->country     = $location->country;
            $this->city        = $location->city;
        } else {
            $response = Http::get('http://api.sypexgeo.net', '/json/' . $this->IP);
            $response = json_decode($response['response']);

            $this->countryCode = $response->country->iso;
            $this->IATA        = 'ASD';
            $this->country     = $response->country->name_en;
            $this->city        = $response->city->name_en;

            Redis::set($this->redisKey . $this->IP, serialize($this));
        }

        return $location;
    }
}
