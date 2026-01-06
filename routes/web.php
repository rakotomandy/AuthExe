<?php

use App\Models\AdminLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegister;
use App\Http\Controllers\AdminLoginController;

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
})->name("admin-login");

Route::post("signup", [UserRegister::class, "register"])->name("signup");
Route::post("login", [UserRegister::class, "login"])->name("login");
Route::post("adminlogin", [AdminLoginController::class, "login"])->name("adminlogin");
// });

Route::middleware("auth:admin")->group(function () {
    Route::get("/admin-dashboard", [AdminLoginController::class, "AdminDashboard"])->name("admin.dashboard");
});
Route::middleware("auth")->group(function () {
    Route::get("/users-dashboard", [UserRegister::class, "userDashboard"])->name("users.dashboard");
    Route::post("/logout", [UserRegister::class, "logout"])->name("logout");
});
