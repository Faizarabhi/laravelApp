<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\User;
use App\Models\SocialAuth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
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

        $socialiteUser = Socialite::driver('google')->user();

        $email = $socialiteUser->getEmail();
        $name = $socialiteUser->getName();
        $google_id = $socialiteUser->getId();

        // Check if the user already exists in your database
        $user = SocialAuth::where('email', $email)->first();
        // dd($user);

        // dd($user);
        if (!$user) {
            // dd('hhh');
            // User doesn't exist in database, create a new user
            $new_user = SocialAuth::create([
                'name' => $name,
                'email' => $email,
                'google_id' => $google_id,
            ]);

        }

        // dd($new_user);
        // Log in the user
        // Auth()->login($email,$name);
        // Auth::attempt($email,$name);
        // Redirect the user to a protected page
        return redirect('/');
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