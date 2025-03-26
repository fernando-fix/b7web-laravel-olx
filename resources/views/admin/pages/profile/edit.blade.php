@extends('web.layouts.default')
@section('title', 'B7Store - Minha conta')

@section('content')

    <div class="my-account-page">
        @include('web.layouts.sidebar')
        <div class="profile-area">
            <h3 class="profile-title">Meu perfil</h3>
            <form action="{{ route('profile.update', $loggedUser) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="name-area">
                    <div class="name-label">Nome</div>
                    <input type="text" placeholder="Digite o seu nome" name="name"
                        value="{{ old('name', $loggedUser->name) }}" class="@error('name') is-invalid @enderror" />
                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="email-area">
                    <div class="email-label">E-mail</div>
                    <input type="email" name="email" placeholder="Digite o seu e-mail"
                        value="{{ old('email', $loggedUser->email) }}" class="@error('email') is-invalid @enderror" />
                </div>
                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
                <div class="password-area">
                    <div class="password-label">Nova senha</div>
                    <div class="password-input-area">
                        <input type="password" placeholder="Digite a sua senha" name="password"
                            class="@error('password') is-invalid @enderror" />
                        <img src="{{ asset('assets/icons/eyeIcon.png') }}" />
                    </div>
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="password-area">
                    <div class="password-label">Repita a nova senha</div>
                    <div class="password-input-area">
                        <input type="password" placeholder="Digite a sua senha" name="password_confirmation"
                            class="@error('password_confirmation') is-invalid @enderror" />
                        <img src="{{ asset('assets/icons/eyeIcon.png') }}" />
                    </div>
                    @error('password_confirmation')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="state-area">
                    <div class="state-label">Estado</div>
                    <select class="states" name="state_id" id="state_id" class="@error('state_id') is-invalid @enderror">
                        @foreach ($states as $state)
                            <option {{ $state->id == old('state_id', $loggedUser->state_id) ? 'selected' : '' }}
                                value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="save-button">Salvar</button>
            </form>
        </div>
    </div>

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/myAccountStyle.css') }}" />
@endsection

@push('scripts')
    <script>
        let saveButton = document.querySelector('.save-button');
        let inputs = document.querySelectorAll('input, select');
        inputs.forEach(function(input) {
            input.addEventListener('change', function() {
                saveButton.style.opacity = '1';
            })
        })
    </script>
@endpush
