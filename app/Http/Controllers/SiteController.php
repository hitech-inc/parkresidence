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

    public function infrastructure()
    {
    	return view('frontend.infrastructure');
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
            $house = Houses::whereSlug($slug)->first();
        
            return view('frontend.house-details', compact('house'));
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
            $house = Houses::whereSlug($slug)->first();
            return view('frontend.house-details', compact('house'));
        }
    }

    public function contacts()
    {
    	return view('frontend.contacts');
    }
}
