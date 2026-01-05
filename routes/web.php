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
