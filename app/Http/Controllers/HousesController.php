<?php

namespace App\Http\Controllers;

use App\Models\Backend\Houses;

use Illuminate\Http\Request;

class HousesController extends Controller
{
    //
    public function houses( $slug = "" )
    {
    	$house = Houses::whereSlug( $slug )->first();
    	//dd($house);
    	return view('frontend.house-details', compact('house'));
    }
}
