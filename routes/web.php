<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get("/signup", function () {
    return view("signup");
})->name("signup");

Route::get("/admin-login", function () {
    return view('admin.admin-login');
});

Route::get("/admin-dashboard", function () {
    return view('admin.admin-dashboard');
});
Route::get("/users-dashboard", function () {
    return view('users.users-dashboard');
});
