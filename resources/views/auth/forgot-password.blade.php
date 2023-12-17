<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="{{ url('Assets/css/forgotpassword-style.css')}}">
</head>
<body>
    <div class="container_session">
        <div class="container_inputs">
            <div class="text-alert">
                {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha uma nova.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="alert alert-success" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-text-input id="email" class="form-control input" type="email" name="email" placeholder="E-MAIL" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="alert alert-warning" style="padding: 10px 5px; margin-top: 5px" />
                </div>
                <x-primary-button class="avancar">
                    <img src="{{ url('Assets/Imagens/seta.png')}}" class="avancar_interno"  width="50">
                    <a href="{{ __('Email Password Reset Link') }}">
                </x-primary-button>
            </form>
        </div>
    </div>
</body>
</html>
