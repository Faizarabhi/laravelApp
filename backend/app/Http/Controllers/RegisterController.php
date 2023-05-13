<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreregisterRequest;
use App\Http\Requests\UpdateregisterRequest;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $data = $request->email;
        dd($data);
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
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        // Hash the user's password
        $hashedPassword = Hash::make($request->password);
        // dd($request->name,$request->email,$request->password,$hashedPassword);

        // Create the user in the database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $register)
    {
        return view('register');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateregisterRequest $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $register)
    {
        //
    }
}