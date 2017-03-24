<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Location\Location;

class IndexController extends BaseController
{

	public function index()
	{
		$location = new Location($_SERVER['REMOTE_ADDR']);
		echo $location->test();

		die;
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
