<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    function testimonial(){
        return view('frontend.testimonial.testimonials');
    }

}
