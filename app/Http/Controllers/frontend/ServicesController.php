<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function wedo(){
        return view('frontend.services.services');
    }
    function sales(){
        return view('frontend.services.services-detail');
    }
    function salestraining(){
        return view('frontend.services.services-detail-v1');
    }
    function learning(){
        return view('frontend.services.services-detail-v2');
    }
}
