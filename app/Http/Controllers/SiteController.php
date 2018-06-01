<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Backend\Houses;

class SiteController extends Controller
{
    //
    public function index()
    {
    	// $houses = Houses::getHouses();
    	return view('frontend.index');    	
    }

    public function about()
    {
    	return view('frontend.about');
    }

    public function location()
    {
    	return view('frontend.location');
    }

    public function infrastructure()
    {
    	return view('frontend.infrastructure');
    }

    public function townHouses()
    {
    	return view('frontend.town-houses');
    }

    public function contacts()
    {
    	return view('frontend.contacts');
    }
}
