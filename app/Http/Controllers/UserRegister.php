<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserRegister extends Controller
{
    //  
    public function register(Request $request)
    {
        $validate = $request->validate([
            "name" => "required|max:255",
            "email" => "required|unique:login,email",
            "password" => "required|min:4|confirmed"
        ]);

        $login = Login::create([
            'name' => $validate["name"],
            'email' => $validate["email"],
            'password' => $validate["password"],
        ]);
        return redirect()->route("/");
    }
    public function login(Request $request)
    {
        $validate = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->route("users.dashboard");
        }

        return redirect()->route("/");
    }

    public function userDashboard()
    {
        $credential = Auth::user(); // get the currently logged-in user

        return view('users.users-dashboard', compact('credential'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
