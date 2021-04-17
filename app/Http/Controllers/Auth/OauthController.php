<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OauthController extends Controller
{
    protected function redirect(string $provider):RedirectResponse {
        return Socialite::driver($provider)->redirect();
    }

    protected function callback(string $provider) {
        $user = Socialite::driver('github')->user();

        //dd($user);
    }
}
