@extends('web.layouts.default')
@section('title', 'B7Store - Selecionar Estado')
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
            <form action="{{ route('select-state.action') }}" method="POST">
                @csrf
                <div class="state-area">
                    <div class="state-label">Estado</div>
                    <select name="state_id" id="state_id">
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="login-button">Selecionar</button>
            </form>
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
