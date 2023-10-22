<!DOCTYPE html>
<html>
<title>Parcerias</title>

    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('Assets/css/parceria.css')}}">

        <link rel="icon" href="{{ url('Assets/Imagens/home-logo.png')}}">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

        <body style="background: white;">
            <!-- Menu -->
                <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" style="background: black;">
                    <div class="container-fluid" style="margin-left: auto; margin-right: auto;">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav" style="margin-left: auto; margin-right: auto; color:white;">
                                <li  class="nav-item"><a class="nav-link" href="{{ url('home')}}">Home</a></li>
                                <li  class="nav-item"><a class="nav-link" href="{{ url('capitulos')}}">Capítulos</a></li>
                                <li  class="nav-item"><a class="nav-link" href="{{ url('midia')}}">Mídia</a></li>
                                <li  class="nav-item"><a class="nav-link" href="{{ url('parceria')}}" style="box-shadow: 0px 1px 0px black;">Parcerias</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            <!-- FIM Menu -->
            <!-- Perfil ou Deslog -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ url('Assets/Imagens/login-icone.png')}}" width="30">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="{{ route('logout')}}" style="color: red; font-weight: 600">Logout</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile.edit')}}" style="color: red; font-weight: 600">Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Perfil ou deslog -->
            <!-- Exposição -->
                <div class="col-md" style="padding: 10px">
                        <div class="col-md-7 list-group">
                            <a href="{{ url('Peter')}}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">PETER: E O ENIGMA DOS SONHOS ( Página 71 )</h5>
                                    <small class="text-muted">E-book</small>
                                </div>
                                <small class="text-muted">Josué Gomes do Nascimento</small>
                            </a>
                        </div>
                </div>

            <!-- FIM Exposição -->

            <!-- Social -->
                <div class="container-fluid container-social">
                    <p class="col copyright">Copyight Jvellucy by</p>
                    <p class="col copyright">© 2020 - 2023 thunderweb.com.br</p>
                    <div class="container-fluid social">

                    <a href="https://www.youtube.com/channel/UC0DHVm6CROqQ29kG1g02qBQ" target="_blank"><img src="{{ url('Assets/Imagens/logo-youtube.png') }}" class="img-fluid img-social" width="50"></a>
                    <a href="https://twitter.com/ThunderWeb1" target="_blank"><img src="{{ url('Assets/Imagens/logo-twitter.png') }}"   class="img-fluid img-social" width="50"></a>
                    <a href="https://www.instagram.com/thunderweb_/" target="_blank"><img src="{{ url('Assets/Imagens/logo-insta.png') }}"   class="img-fluid img-social" width="50"></a>
                    </div>
                </div>

            <!-- FIM Social -->  
        </body>

     <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

     <script href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</html>