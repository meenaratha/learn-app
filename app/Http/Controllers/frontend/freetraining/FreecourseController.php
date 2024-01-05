<?php

namespace App\Http\Controllers\frontend\freetraining;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreecourseController extends Controller
{
    public function index(){
        return view('frontend.freetraining.free-course');
    }

    public function datascience(){
        return view('frontend.freetraining.data-science');
    }

}
