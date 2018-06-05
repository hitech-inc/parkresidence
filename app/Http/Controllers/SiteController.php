<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Backend\Houses;

class SiteController extends Controller
{
    //
    public function index()
    {

        $houses = Houses::getHouses();
        //$houses = Houses::where('alias', 'town-houses')->get();

        return view('frontend.index', compact('houses'));   	
    }

    public function about()
    {
    	return view('frontend.about');
    }

    public function location()
    {
    	return view('frontend.location');
    }

    public function townHouses($slug = "")
    {
        if (!$slug)
        {
            $townhouses = Houses::where('alias', 'town-houses')->get();
        
            return view('frontend.town-houses', compact('townhouses'));
        }

        else
        {
            $currentURL = \Request::segment(1);
            $house = Houses::whereSlug($slug)->first();
            $townHouses = Houses::where('alias', 'town-houses')->get();
            //dd($currentURL);
            return view('frontend.house-details', compact('house', 'townHouses', 'currentURL'));
        }
    }

    public function villas($slug = "")
    {
        if (!$slug)
        {
            $villas = Houses::where('alias', 'villas')->get();

            return view('frontend.villas', compact('villas'));
        }
        else 
        {
            $currentURL = \Request::segment(1);
            $house = Houses::whereSlug($slug)->first();
            $villas = Houses::where('alias', 'villas')->get();

            return view('frontend.house-details', compact('house', 'villas', 'currentURL'));
        }
    }

    public function contacts()
    {
    	return view('frontend.contacts');
    }
}
