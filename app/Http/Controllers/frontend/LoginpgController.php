<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginpgController extends Controller
{
    function loginpg(){
        return view('frontend.login.login');
    }
    function studentpg(){
        return view('frontend.client.studentpg');
    }
    function trainerpg(){
        return view('frontend.client.trainer');
    }
}
