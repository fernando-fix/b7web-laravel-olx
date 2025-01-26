<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('web.pages.auth.login');
    }
    public function login_action(LoginRequest $request)
    {
        dd($request->all());
    }
    public function register()
    {
        return view('web.pages.auth.register');
    }
    public function register_action(RegisterRequest $request)
    {
        dd($request->all());
    }
    public function forgot_password()
    {
        return view('web.pages.auth.forgot-password');
    }
    public function forgot_password_action(Request $request)
    {
        dd($request->all());
    }
}
