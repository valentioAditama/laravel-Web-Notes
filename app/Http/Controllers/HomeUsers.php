<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUsers extends Controller
{
    public function home(){
        return view('/users/home');
    }

    public function createReq(){
        return view('/users/createReq');
    }

    public function createWithoutAdmin(){
        return view('/users/createWithoutAdmin');
    }
}
