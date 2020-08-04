<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        return view('welcome');
        // dd($request["fname"]);
    }

    public function welcome_post(Request $request){
        // dd($request->all());
        $nama=$request["fname"];
        $name=$request["lname"];
        echo "<h2>Selamat Datang $nama $name</h2>";
        return view('welcome');
    }
}
