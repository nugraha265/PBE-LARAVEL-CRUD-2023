<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function showLoginForm(User $user)
    {
        return view('webpages.auth.login');
    }

    public function showRegisterForm(User $user)
    {
        return view('webpages.auth.register');
    }

    public function register(Request $request)
    {
        // Validasi dll
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('auth.login.form');
    }
    public function login(Request $request)
    {
        // Validasi dll
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Sukses login
            return redirect()->route('dashboard');;
        } else {
            // Gagal login
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login.form');
    }
}
