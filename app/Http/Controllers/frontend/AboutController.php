<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function company(){
        return view('frontend.about.company-history');
    }
    function about(){
        return view('frontend.about.about');
    }
    function awards(){
        return view('frontend.about.awards-recognition');
    }
    function clients(){
        return view('frontend.about.clients');
    }
    function history(){
        return view('frontend.about.company-history');
    }
    function faq(){
        return view('frontend.about.faq');
    }
    function team(){
        return view('frontend.about.leadership-team');
    }
    function partners(){
        return view('frontend.about.partners');
    }

}
