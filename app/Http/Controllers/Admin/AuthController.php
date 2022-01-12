<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login')->withErrors($data)->with('error', 'User not found');
    }

    public function logout()
    {

    }

}
