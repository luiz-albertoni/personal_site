<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->with(['hd' => 'example.com'])->redirect();
    }

    public function callback()
    {
        $providerUser = \Socialite::driver('facebook')->user();
        dd($providerUser);
    }
}
