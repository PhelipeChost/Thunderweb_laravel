<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ url('Assets/css/login-style.css')}}">
    <script src="{{ url('Assets/js/Mostrarsenha.js')}}"></script>

   <title>Login</title>
   
</head>
<body>
   <x-auth-session-status class="mb-4" :status="session('status')" />
   <div class="container container_session">
       <h1>Iniciar Sessão</h1>
       <div class="container container_inputs">
           <form method="POST" action="{{ route('login') }}">
               @csrf

               <!-- Email Address -->
               <div>
                   <x-input-error :messages="$errors->get('email')" class="mt-2 alert alert-danger" />
                   <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="E-MAIL" required autofocus autocomplete="username" />
               </div>

               <!-- Password -->
               <div class="mt-4">
                   <x-text-input id="senha" class="form-control" type="password" name="password" placeholder="Senha" required autocomplete="current-password" />
                   <button type="button" class="btn display" onclick="mostrarSenha()"><img src="{{ url('Assets/Imagens/olhinho-ohayo.png')}}" width="40"></button> 
                   <x-input-error :messages="$errors->get('password')" class="mt-2 alert alert-warning" />
               </div>

               <!-- Remember Me -->
               <div class="block mt-4">
                   <label for="remember_me" class="inline-flex items-center">
                       <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                       <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Lembrar-me') }}</span>
                   </label>
               </div>

               <div class="flex items-center justify-end mt-3">
                   <!-- @if (Route::has('password.request'))
                       <a class="criar-conta underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                           {{ __('Esqueceu sua senha?') }}
                       </a>
                   @endif -->

                   <center>
                        <x-primary-button class="avancar">
                            <img src="{{ url('Assets/Imagens/seta.png')}}" class="avancar_interno"  width="80">
                            <a class="criar-conta underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ ('Log in') }}">
                        </x-primary-button>
                    
                    <div class="flex items-center justify-end mt-3">
                        <a class="criar-conta underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                            {{ __('Criar uma conta?') }}
                        </a><br>
                    </center>
           </form>
       </div>
   </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>   
   
   <!-- Session Status -->
   