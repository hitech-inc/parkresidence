<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
    	return view('frontend.index');
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

    public function houseDetails()
    {
    	return view('frontend.house-details');
    }
}
