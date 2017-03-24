<?php

namespace App\Location;

use Illuminate\Support\Facades\Redis;

/**
 * Detect user location by IP address
 */
class Location {

	/**
	 * User IP
	 */
	protected $IP;

	public function __construct($IP)
	{
		$redis = Redis::set('asd:asd', 'asd', 3);
		//Redis::set('name', 'sergey');
	}

	public function test()
	{
		return Redis::get('asd:asd');
	}


}