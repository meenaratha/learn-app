<?php

namespace App\Http\Controllers\frontend\corporate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function mission(){
        return view('frontend.corporate-training.mission-to-billions');
    }
    public function malefemale(){
        return view('frontend.corporate-training.magic-males-females');
    }
    public function enterprise(){
        return view('frontend.corporate-training.enterprise');
    }
    public function awaken(){
        return view('frontend.corporate-training.awaken-warrior');
    }
    public function artwork(){
        return view('frontend.corporate-training.artwork');
    }
    public function life(){
        return view('frontend.corporate-training.life-education');
    }
    public function college(){
        return view('frontend.corporate-training.college-corporate');
    }
    public function women(){
        return view('frontend.corporate-training.women-excellence');
    }
    public function law(){
        return view('frontend.corporate-training.superior-law');
    }
    public function regulation(){
        return view('frontend.corporate-training.regulation-attraction');
    }
    public function adult(){
        return view('frontend.corporate-training.adult');
    }
    public function nlp(){
        return view('frontend.corporate-training.nlp');
    }
    public function cdp(){
        return view('frontend.corporate-training.college-program');
    }
    public function teach(){
        return view('frontend.corporate-training.teach-instructor');
    }
    public function lifestyle(){
        return view('frontend.corporate-training.lifestyle-skill');
    }
    public function council(){
        return view('frontend.corporate-training.council');
    }


}
