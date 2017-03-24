<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\GEOIP\GEOIP;

class IndexController extends BaseController
{

	public function index()
	{
		if (app('env') == 'local') {
			$GEOIP = new GEOIP('185.16.31.221');
		} else {
			$GEOIP = new GEOIP($_SERVER['REMOTE_ADDR']);	
		}
		$location = $GEOIP->getLocation();
		var_dump($location); die;

	}

    public function iWantToCrimea()
    {
    	//$content = file_get_contents('http://api.sypexgeo.net/json/' . $_SERVER['REMOTE_ADDR']);
    	return view('index');
    }

    public function getToSimferopol()
    {
    	return view('index');
    }
}
