<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegister extends Controller
{
    //  
    public function register(Request $request){
        $validate=$request->validate([
            "name"=>"required|max:255",
            "email"=>"required|unique:login,column,except,id",
            
        ])
    }
}
