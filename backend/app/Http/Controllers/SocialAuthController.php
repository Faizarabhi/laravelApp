<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\User;
use App\Models\SocialAuth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        // dd(Socialite::driver('google'));

        return Socialite::driver('google')->redirect();

    }

    public function handleGoogleCallback()
    {
        $socialiteUser = Socialite::driver('google')->stateless()->user();

        $email = $socialiteUser->getEmail();
        $name = $socialiteUser->getName();
        $google_id = $socialiteUser->getId();
        $user = SocialAuth::where('email', $email)->first();

        if (!$user) {
            // User doesn't exist, create a new user
            $user = SocialAuth::create([
                'name' => $name,
                'email' => $email,
                'google_id' => $google_id,
            ]);
        }

        // Log in the user
        Auth::login($user);

        return redirect('/');
    }
    public function redirectToFacebook()
    {
        // dd(Socialite::driver('facebook'));
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $socialiteUser = Socialite::driver('facebook')->user();
        dd($socialiteUser);
        // Check if user already exists in the database
        // $existingUser = User::where('email', $user->email)->first();

        // if ($existingUser) {
        //     Auth::login($existingUser);
        // } else {
        //     // Create a new user with the social account data
        //     $newUser = new User();
        //     $newUser->name = $user->name;
        //     $newUser->email = $user->email;
        //     $newUser->save();

        //     Auth::login($newUser);
        // }

        // return redirect()->intended('/');
    }
}