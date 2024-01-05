<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function error(){
        return view('frontend.pages.404');
    }
    function search(){
        return view('frontend.pages.search');
    }
}
