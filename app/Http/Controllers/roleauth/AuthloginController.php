<?php

namespace App\Http\Controllers\roleauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;


class AuthloginController extends Controller
{

     /**
     * Display login page.
     *
     *
     */
    public function show()
    {
        return view('custom-auth.login');
    }



     public function login(Request $request)
     {
        $request ->validate(
            [
                'email' =>'required',
                'password' =>'required'
            ]
        );

        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::guard('webroles')->attempt(['email' => $email, 'password' => $password])){
            $role = Role::where('email',$email)->first();

            Auth::login($role);
            $position = $role->position;
            if($position == '0'){
                return view('student.index');
            }
            if($position == '1'){
                return view('trainer.home');
            }

            else{
                return view('/');
            }
        }
        else{
            return back()->withErrors(['Invalid credential']);
        }
     }




}



