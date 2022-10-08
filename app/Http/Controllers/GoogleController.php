<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function loginUsingGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->stateless()->user();
        $this->_LoginorRegisterUser($user);
        return redirect('/dashboard');
    }

    protected function _LoginorRegisterUser($data){
        $user=User::where('email','=',$data->email)->first();
        if(!$user){
            $user = new User;
            $user->username = $data->name;
            $user->fullname = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
}
