<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Conta</title>

    <link rel="stylesheet" href="{{ url('Assets/css/register-style.css')}}">
    <script src="{{ url('Assets/js/Mostrarsenha.js')}}"></script>

</head>
<body>
    <div class="container_session">
        <h1>Criar Conta</h1>
        <div class="container_inputs">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="Usuário" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 alert alert-danger" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="E-MAIL" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 alert alert-danger" />
                </div>

                <!-- Password -->
                <div class="mt-4">

                    <input id="senha" class="form-control" type="password" name="password" placeholder="Senha" required autocomplete="new-password">
                    <button type="button" class="btn display" onclick="mostrarSenha()"><img src="{{ url('Assets/Imagens/olhinho-ohayo.png')}}" width="40"></button>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 alert alert-danger" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Confirmar Senha" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 alert alert-danger" />
                </div>



                    <center>
                        <x-primary-button class="avancar">
                            <img src="{{ url('Assets/Imagens/seta.png')}}" class="avancar_interno"  width="80">
                            <a class="criar-conta underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ ('register') }}">
                        </x-primary-button>

                        <div class="flex items-center justify-end mt-4">
                            <a class="criar-conta underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Já tenho uma conta') }}
                            </a>
                    </center>
                </div>
            </form>
        </div>
    </div>

    <div id="container-red"></div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>


