<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Show the signup form
    public function create()
    {
        return view('users.signup');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect to a specific route or view after successful registration
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the login page
        return redirect('/login');
    }

    public function login()
    {
        // Show the login form
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            // Regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect to the intended page or a default page
            return redirect('/');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);
    }
}
