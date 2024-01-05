<?php

namespace App\Http\Controllers\roleauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('custom-auth.register');
    }

    /**
     * Handle account registration request
     *
     *
     */
    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255', 'unique:roles'],
                'email' =>['required', 'string', 'email', 'max:255', 'unique:roles'],
                'phone' =>['required', 'string', 'max:10','min:10', 'unique:roles'],
                'position' =>['required', 'string', 'max:255'],
                'password' =>['required', 'string', 'max:8','min:8','confirmed'],
            ]
        );

        $role = new Role;
        $role->name = $request->input('name');
        $role->email = $request->input('email');
        $role->phone = $request->input('phone');
        $role->position = $request->input('position');
        $role->password = $request->input('password');
       $role->save();

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


       // return redirect('/redirect')->with('success', "Account successfully registered.");
    }

}


