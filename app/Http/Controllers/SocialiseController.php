<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class SocialiseController extends Controller
{
    public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    try{
     $google_user = Socialite::driver('google')->user();
      $user = User::where('google_id', $google_user->getId())->first();
      if(!$user){
           $new_user = User::create([
            'name' => $google_user->getNmae(),
            'email' => $google_user->getEmail(),
            'google_id' =>$google_user->getId()

           ]);
           Auth::login($new_user);

           return redirect()->intended('welcome-to-our-world');
      }
      else{
        Auth::login($user);
        return redirect()->intended('welcome-to-our-world');
      }


    }
    catch (\Throwable $th){
        dd('Something went wrong'.$th->getMessage());
    }


    // Handle the user data as needed (e.g., create a new user or log in)

    return redirect('/home');
}
}
