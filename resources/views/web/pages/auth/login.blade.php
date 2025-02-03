@extends('web.layouts.default')
@section('title', 'B7Store - Login')
@section('content')
    <a href="{{ route('home') }}" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <a href="{{ route('home') }}">
                <h3 class="login-title">B7Store</h3>
            </a>
            <div class="text-login">
                Use as suas credenciais para realizar o Login.
            </div>
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <div class="email-area">
                    <div class="email-label">E-mail</div>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="@error('email') is-invalid @enderror" placeholder="Digite o seu e-mail" />
                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="password-area">
                    <div class="password-label">
                        <div class="password-area-text">Senha</div>
                        <a href="{{ route('forgot-password') }}" class="password-area-forgot">Esqueceu sua senha?</a>
                    </div>
                    <div class="password-input-area">
                        <input type="password" name="password" class="@error('password') is-invalid @enderror"
                            placeholder="Digite a sua senha" />
                        <img src="assets/icons/eyeIcon.png" alt="Ícone mostrar senha" />
                    </div>
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="login-button">Entrar</button>
            </form>
            <div class="register-area">
                Ainda não tem cadastro? <a href="{{ route('register') }}">Cadastre-se</a>
            </div>
        </div>
        <div class="terms">
            Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
            <a href="">Política de Privacidade</a>, e também, em receber
            comunicações via e-mail e push de todos os nossos parceiros.
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/loginSignUpStyle.css') }}" />
@endsection
