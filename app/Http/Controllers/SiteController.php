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

        $houses = Houses::getHouses();
        $housesTake = Houses::take(7)->get();
        
        return view('frontend.index', compact('houses', 'housesTake'));   	
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
            $townhouses = Houses::where('alias', 'town-houses')->paginate(9);
        
            return view('frontend.town-houses', compact('townhouses'));
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
            $villas = Houses::where('alias', 'villas')->get();

            return view('frontend.villas', compact('villas'));
        }
        else 
        {
            // $currentURL = \Request::segment(1);
            $house = Houses::whereSlug($slug)->first();
            $houses = Houses::where('alias', 'villas')->get();

            return view('frontend.villas-details', compact('house', 'houses'));
        }
    }

    public function contacts()
    {
    	return view('frontend.contacts');
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
