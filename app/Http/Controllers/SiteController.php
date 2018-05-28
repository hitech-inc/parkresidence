<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Backend\Houses;

class SiteController extends Controller
{
    //
    public function index(Request $request, $slug = "" )
    {
		// // index page
    	if (!$slug)
    	{
    		$houses = Houses::getHouses();
    		return view('frontend.index', compact('houses'));
    	}
    	//house-details-page
    	else 
    	{
    		$house = Houses::whereSlug( $slug )->first();
    		//dd($house);
    		return view('frontend.house-details', compact('house'));
    	}
    }

    public function about()
    {
    	return view('frontend.about');
    }

    public function features()
    {
    	return view('frontend.features');
    }

    public function cottages()
    {
    	return view('frontend.cottages');
    }

    public function tour()
    {
    	return view('frontend.3d-tour');
    }

    public function contacts()
    {
    	return view('frontend.contacts');
    }

    public function houseDetails($slug = "")
    {
    	$house = Houses::whereSlug( $slug )->first();
    	return view('frontend.house-details', compact('house'));
    }
}
