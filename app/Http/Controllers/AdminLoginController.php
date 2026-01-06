<?php

namespace App\Http\Controllers;


use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminLoginController extends Controller
{
    //
    public function login(Request $request)
    {
        $validate = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        if (Auth::guard("admin")->attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->route("admin.dashboard");
        }

        return redirect()->route("/");
    }

    public function AdminDashboard()
    {
        $credential = Auth::user(); // get the currently logged-in user

        return view('admin.admin-dashboard', compact('credential'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
