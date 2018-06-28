<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Backend\Houses;
use App\Mail\Feedback;
use Mail;

use App\Models\Backend\texts;

class SiteController extends Controller
{
    //
    public function index()
    {
        $currentUrl = \Request::segment(1);
        $houses = Houses::getHouses();
        //$houses = Houses::where('alias', 'villas')->orWhere('alias', 'town-houses')->get();
        $villas = Houses::where('alias', 'villas')->get();
        $townHouses = Houses::where('slug', 'town-house-14')
                              ->orWhere('slug', 'town-house-12')
                              ->get();
        //$prodano = Houses::where('alias', 'prodan')->get();
        //dd($prodano);
        
        return view('frontend.index', compact('houses', 'villas', 'currentUrl', 'townHouses', 'prodano'));   	
    }

    public function about(Request $request)
    {
        $currentUrl = \Request::segment(1);
        $texts = texts::render();

    	return view('frontend.about', compact('currentUrl', 'texts'));
    }

    public function location()
    {
        $currentUrl = \Request::segment(1);
    	return view('frontend.location', compact('currentUrl'));
    }

    public function townHouses($slug = "")
    {
        if (!$slug)
        {
            $currentUrl = \Request::segment(1);
            $townhouses = Houses::where('slug', 'town-house-12')
                                    ->orWhere('slug', 'town-house-14')
                                    ->get();
            //$townhouses = Houses::where('alias', 'town-houses')->paginate(9);
            // $townhouses = Houses::where('alias', 'town-houses')->take(4)->get();
            //dd($townhouses);

            return view('frontend.town-houses', compact('townhouses', 'currentUrl'));
        }

        else
        {
            // $currentURL = \Request::segment(1);
            $house = Houses::whereSlug($slug)->first();
            $houses = Houses::where('alias', 'town-houses')->take(3)->get();
            //dd($currentURL);
            return view('frontend.town-houses-details', compact('house', 'houses'));
        }
    }

    public function villas($slug = "")
    {
        if (!$slug)
        {
            $currentUrl = \Request::segment(1);
            // $villas = Houses::where('alias', 'villas')->get();
            $villas = Houses::where('alias', 'villas')->paginate(9);

            return view('frontend.villas', compact('villas', 'currentUrl'));
        }
        else 
        {
            // $currentURL = \Request::segment(1);
            $house = Houses::whereSlug($slug)->first();
            $houses = Houses::where('alias', 'villas')->get();
            //dd($house);
            return view('frontend.villas-details', compact('house', 'houses'));
        }
    }

    public function contacts()
    {
        $currentUrl = \Request::segment(1);
    	return view('frontend.contacts', compact('currentUrl'));
    }

    public function feedback(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text
        ];

        $success = '
        <div style="margin: 0 auto;">
                      <h2 style="text-align: center; color: #000; padding: 25px;">Спасибо, Ваша заявка принята!</h2>
                    </div>  
        ';
        //dd($data);
        Mail::to(env('MAIL_TO'))->send(new Feedback($data));
        
        // return view('frontend.contacts');
        return redirect('/contacts')->with('status', $success);
    }
}
