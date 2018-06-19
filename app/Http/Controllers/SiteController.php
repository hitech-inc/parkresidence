<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Backend\Houses;
use App\Mail\Feedback;
use Mail;

class SiteController extends Controller
{
    //
    public function index()
    {
        $currentUrl = \Request::segment(1);
        $houses = Houses::getHouses();
        $housesTake = Houses::take(7)->get();
        
        return view('frontend.index', compact('houses', 'housesTake', 'currentUrl'));   	
    }

    public function about(Request $request)
    {
        $currentUrl = \Request::segment(1);

    	return view('frontend.about', compact('currentUrl'));
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
            //$townhouses = Houses::where('alias', 'town-houses')->paginate(9);
            $townhouses = Houses::where('alias', 'town-houses')->take(2)->get();

            return view('frontend.town-houses', compact('townhouses', 'currentUrl'));
        }

        else
        {
            // $currentURL = \Request::segment(1);
            $house = Houses::whereSlug($slug)->first();
            $houses = Houses::where('alias', 'town-houses')->get();
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
