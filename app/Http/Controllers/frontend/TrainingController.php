<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
     function digital(){
        return view('frontend.training.digital-marketing');
     }
     function training_program_one(){
        return view('frontend.training.training-program');
     }
     function training_program_two(){
        return view('frontend.training.training-program-detail-v1');
     }
     function training_program_three(){
        return view('frontend.training.training-program-detail-v2');
     }
     function training_program_four(){
        return view('frontend.training.training-program-detail-v3');
     }
     function training_program_five(){
        return view('frontend.training.training-program-detail-v4');
     }
     function training_program_six(){
        return view('frontend.training.training-program-detail-v5');
     }
}
