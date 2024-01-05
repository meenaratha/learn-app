<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlineclassController extends Controller
{
    function onlineclass_one(){
        return view('frontend.online-class-training.portfolio');
    }
    function onlineclass_two(){
        return view('frontend.online-class-training.portfolio-grid-alt');
    }
    function onlineclass_three(){
        return view('frontend.online-class-training.portfolio-masonry');
    }
    function onlineclass_four(){
        return view('frontend.online-class-training.portfolio-single');
    }
    function onlineclass_five(){
        return view('frontend.online-class-training.portfolio-single-v2');
    }
}
