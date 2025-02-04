<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            alert()->info("Você já está logado");
            return redirect()->route('home');
        }
        return view('web.pages.auth.login');
    }

    public function login_action(LoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('login');
        }

        alert()->success('Login realizado com sucesso');
        return redirect()->route('dashboard.my-account');
    }

    public function logout()
    {
        if (!Auth::check()) {
            alert()->success('Você não está logado');
            return redirect()->route('login');
        } else {
            alert()->success('Logout realizado com sucesso');
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function register()
    {
        return view('web.pages.auth.register');
    }

    public function register_action(RegisterRequest $request)
    {
        $user = User::create($request->all());
        if (!$user) return redirect()->route('register');

        Auth::login($user);

        return redirect()->route('select-state');
    }

    public function select_state()
    {
        $states = State::get();
        return view('web.pages.auth.select-state', compact('states'));
    }

    public function select_state_action(Request $request)
    {
        $user = User::find(Auth::id());
        $user->state_id = $request->state_id;
        $user->save();

        alert()->success('Registro realizado com sucesso');
        if ($user->state_id) {
            return redirect()->route('home');
        }

        return redirect()->route('home');
    }

    public function forgot_password()
    {
        return view('web.pages.auth.forgot-password');
    }

    public function forgot_password_action(Request $request)
    {
        $token = bin2hex(random_bytes(16));
        alert()->success('Link enviado com sucesso');
        return redirect()->route('reset-password', ['pass_token' => $token]);
    }

    public function reset_password(Request $request)
    {
        return view('web.pages.auth.reset-password');
    }

    public function reset_password_action(Request $request)
    {
        alert()->success('Sua nova senha foi enviada para o seu e-mail');
        return redirect()->route('login');
    }
}
