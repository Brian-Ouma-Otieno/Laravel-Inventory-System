<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{

    // redirecting to google
    // parameter NA
    function googleLogin(){

        return Socialite::driver('google')->redirect();
    }

    
    // authenticating the user through the google account
    // parameter NA
    function googleAuthentication(){

        $googleUser = Socialite::driver('google')->user();
        $user = User::where('google_id', $googleUser->id)->first();
        
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            $insertUser = new User();

            $insertUser->google_id = $googleUser->id;
            $insertUser->name = $googleUser->name;
            $insertUser->email = $googleUser->email;
            $insertUser->password = Hash::make('@Babalao19');
            $insertUser->save();

            Auth::login($insertUser);
            return redirect()->route('dashboard');
        }        
        
    }
}
