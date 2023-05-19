<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd('rr');
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            // return redirect()->intended('/');
            // dd('rr');
            return redirect('/api');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreloginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $login)
    {
        return view('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloginRequest $request, User $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $login)
    {
        //
    }
}