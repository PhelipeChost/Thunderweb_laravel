<!DOCTYPE html>
<html>
<title>Home</title>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="icon" href="{{ url('Assets/Imagens/home-logo.png') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
        <body>
            <!-- Menu -->
                <div id="Home"></div>
                <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light" style="background: black;">
                    <div class="container-fluid" style="margin-left: auto; margin-right: auto;">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav" style="margin-left: auto; margin-right: auto; color:white;">
                                <li  class="nav-item"><a class="nav-link" href="#Home" style="box-shadow: 0px 1px 0px black;">Home</a></li>
                                <li  class="nav-item"><a class="nav false-link">Quem Somos</a></li>
                                <li  class="nav-item"><a class="nav false-link">Livros</a></li>
                                <div class="vr"></div>
                                <li  class="nav-item"><a class="nav false-link">Capítulos</a></li>
                                <li  class="nav-item"><a class="nav false-link">Mídia</a></li>
                                <li  class="nav-item"><a class="nav false-link">Parcerias</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            <!-- FIM Menu -->
            <!-- Criar conta ou logar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="{{ url('Assets/Imagens/seta-baixo.png') }}" width="12"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline continuar_nav_button">Clique aqui para continuar navegando</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logar</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Cadastrar</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="logout.php" style="color: red; font-weight: 700;">Encerrar Sessão</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                <div class="alert alert-warning">
                    <img src="{{ url('Assets/Imagens/warning-icon.png')}}" width="20">
                    É necessário fazer uma autenticação para poder acessar os capitulos
                </div>

            <!-- FIM Logout -->
            <main style="background-image: url('Assets/Imagens/45-3.png');
                                                background-size: cover;">
                <div class="container-fluid" id="container-title">
                    <div class="container">
                        <img src="{{ url('Assets/Imagens/Thunder-title.png') }}" class="img-fluid" width="1000">
                        <img src="{{ url('Assets/Imagens/Thunder-subtitle.png') }}" class="img-fluid sub-title-img" width="500">
                    </div>

            </div>

            <!-- Social -->
                <div class="container-fluid container-social">

                    <p class="col copyright">Copyight Jvellucy by</p>
                    <p class="col copyright" id="copyright">© 2020 - 2024 thunderweb.com.br</p>

                    <div class="container-fluid social">
                        <a href="https://www.youtube.com/@thunderweb3138" target="_blank"><img src="{{ url('Assets/Imagens/youtube.png') }}" class="img-fluid img-social"></a>
                        <a href="https://twitter.com/ThunderWeb1" target="_blank"><img src="{{ url('Assets/Imagens/twitter.png') }}" class="img-fluid img-social"></a>
                        <a href="https://www.instagram.com/thunderweb_/" target="_blank"><img src="{{ url('Assets/Imagens/instagram.png') }}" class="img-fluid img-social"></a>
                    </div>

                </div>

            <!-- FIM Social -->

            </main>
        </body>

     <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

     <script href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</html>
