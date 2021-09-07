<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('/auth/login');
    }

    public function signup(){
        return view('/auth/signup');
    }

    public function storeSignup(){
        $this->validate(request(), [
            'email' => 'required',
            'username' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['email', 'username', 'password']));
        auth()->login($user);
        return redirect()->to('/');
    }

    public function forgotpassword(){
        return view('/auth/forgotpassword');
    }

    public function resetpassword(){
        return view('/auth/resetpassword');
    }

    // admin page
    public function loginAdmin() {
        return view('/admin/login');
    }
}
