<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Two\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        dd('redirect');
        return Socialite::driver('google')->stateless()->user();
        // return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        // dd('redirect');
        // try {
            $user = Socialite::driver('google')->user();
            dd($user);
        // } catch (\Exception $e) {
        //     return redirect('/login');
        // }

        // // Check if user already exists in the database
        // $existingUser = User::where('email', $user->email)->first();
        // // dd($user);
        // if ($existingUser) {
        //     // dd($user);
        //     Auth::login($existingUser);
        // } else {
        //     // Create a new user with the social account data
        //     $newUser = new User();
        //     $newUser->name = $user->name;
        //     $newUser->email = $user->email;
        //     $newUser->save();

        //     Auth::login($newUser);
        // }

        return redirect()->intended('/dashboard');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // Check if user already exists in the database
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Create a new user with the social account data
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->save();

            Auth::login($newUser);
        }

        return redirect()->intended('/dashboard');
    }
}