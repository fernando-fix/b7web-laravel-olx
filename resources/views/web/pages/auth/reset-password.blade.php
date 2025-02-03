@extends('web.layouts.default')
@section('title', 'B7Store - Recuperar senha')
@section('content')
    <a href="{{ route('home') }}" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>
            <div class="text-login">
                Use as suas credenciais para realizar o Login.
            </div>
            <form action="{{ route('reset-password.action') }}" method="POST">
                @csrf
                <div class="email-area">
                    <div class="email-label">Token</div>
                    <input type="text" name="pass_token" class="@error('pass_token') is-invalid @enderror"
                        value="{{ request('pass_token') }}" placeholder="Informe o token para recuperar a senha" />
                </div>
                @error('pass_token')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
                <button class="login-button">Resetar senha</button>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/loginSignUpStyle.css') }}" />
@endsection
