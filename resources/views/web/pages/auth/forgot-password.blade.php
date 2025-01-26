<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/loginSignUpStyle.css') }}" />
    <title>B7Store - Recuperar Senha</title>
</head>

<body>
    <a href="{{ route('home') }}" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>
            <div class="text-login">
                Use as suas credenciais para realizar o Login.
            </div>
            <form action="{{ route('forgot-password.action') }}" method="POST">
                @csrf
                <div class="email-area">
                    <div class="email-label">E-mail</div>
                    <input type="email" name="email" class="@error('email') is-invalid @enderror"
                        placeholder="Digite o seu e-mail" />
                </div>
                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
                <button class="login-button">Recuperar senha</button>
            </form>
            <div class="register-area">
                Ainda não tem cadastro? <a href="{{ route('register') }}">Cadastre-se</a>
            </div>
        </div>
    </div>
    <footer>
        <span>powered by B7Web</span>
        <span>B7Store</span>
    </footer>
</body>

</html>
