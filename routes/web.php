<?php

use App\Http\Controllers\UserRegister;
use Illuminate\Support\Facades\Route;

// Route::middleware("guest")->group(function () {
Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get("/signup", function () {
    return view("signup");
})->name("signup");

Route::get("/admin-login", function () {
    return view('admin.admin-login');
});

Route::post("signup", [UserRegister::class, "register"])->name("signup");
Route::post("login", [UserRegister::class, "login"])->name("login");
// });

Route::get("/admin-dashboard", function () {
    return view('admin.admin-dashboard');
});
Route::middleware("auth")->group(function () {
    Route::get("/users-dashboard", [UserRegister::class, "userDashboard"])->name("users.dashboard");
    Route::post("/logout", [UserRegister::class, "logout"])->name("logout");
});
