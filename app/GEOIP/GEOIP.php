<?php

namespace App\GEOIP;

use Illuminate\Support\Facades\Redis;

/**
 * Detect user location by IP address
 */
class GEOIP {

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
		$location = $this->checkRedis();
		return $location;
	}

	/**
	 * Check redis for user location
	 * @return boolean
	 */
	private function checkRedis()
	{
		if ($location = Redis::get('GEOIP:' . $this->IP)) {
			$this->countryCode = $location['countryCode'];
			$this->IATA        = $location['IATA'];
			$this->country     = $location['country'];
			$this->city        = $location['city'];
			
			return true;
		}

		return false;
	}


}