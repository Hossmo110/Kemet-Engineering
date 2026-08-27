<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Show admin login page
     */
    public function showLogin()
    {
        return view('admin.login');
    }


    /**
     * Handle admin login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        if (Auth::attempt(
            $credentials,
            $request->boolean('remember')
        )) {

            // Regenerate session after successful login
            $request->session()->regenerate();


            // Go directly to Admin Dashboard
            return redirect()
                ->route('admin.dashboard');
        }


        // Login failed
        return back()
            ->withErrors([
                'email' => 'The email or password is incorrect.',
            ])
            ->withInput(
                $request->only('email')
            );
    }


    /**
     * Logout admin
     */
    public function logout(Request $request)
    {
        Auth::logout();


        // Invalidate current session
        $request->session()->invalidate();


        // Generate a new CSRF token
        $request->session()->regenerateToken();


        // Return to admin login
        return redirect()
            ->route('admin.login');
    }
}
