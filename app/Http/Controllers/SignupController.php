<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    function index() {
        return view('forms.signup');
    }

    function signup(StoreUserRequest  $request) {

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->intended('/dashboard');
        // dd($request->all());
        // echo $request->_token;
    }
}
