<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // Get properties from database
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        return view('auth.login', ['projects' => $projects]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
