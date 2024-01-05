<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        $role = Auth::user()->role;
        if($role == '0'){
            return view('student.index');
        }
        if($role == '1'){
            return view('trainer.home');
        }
        if($role =='null'){
            return view('trainer.home');
        }
        else{
            return view('/');
        }
    }


}
