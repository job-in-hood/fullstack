<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\OauthProvider;
use App\Services\Oauth\Oauth;
use http\Env\Response;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OauthController extends Controller
{
    protected function redirect(OauthProvider $provider): RedirectResponse
    {
        return Socialite::driver($provider->slug)->redirect();
    }

    protected function callback(OauthProvider $provider)
    {
        $oauthUser = Socialite::driver($provider->slug)->user();

        if ($oauthUser) {
            $user = (new Oauth($provider, $oauthUser))->findOrRegisterUser();

            if ($user) {
                auth()->login($user);
                return response()->redirectToRoute('home');
            }
        }
        return response()->redirectToRoute('login');
    }
}
