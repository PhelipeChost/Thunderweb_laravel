<!DOCTYPE html>

<html>

<title>Capitulos</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('assets/css/capitulos.css') }}">

        <link rel="icon" href="{{ url('Assets/Imagens/home-logo.png') }}">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            @media (max-width: 575.98px) {
                .container-capitulos {
                    max-width: 100%;
                }

                .cap-img {
                    max-width: 40%;
                }
            }

            @media (max-width: 991.98px) {
                .container-capitulos {
                    max-width: 100%;
                }
            }

            .container-capitulos {
                    max-width: 100%;
                    
                }

            .cap-img {
                transition: 0.3s;
                width: 230px;
                padding: 5px 1px;
            }

            .cap-img:hover {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                
            }
        </style>

    </head>
        <body>

            <!-- Menu -->

                <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" style="background: black;">
                    <div class="container-fluid" style="margin-left: auto; margin-right: auto;">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav" style="margin-left: auto; margin-right: auto; color:white;">
                                <li  class="nav-item"><a class="nav-link a" href="{{ url('home') }}">Home</a></li>
                                <li  class="nav-item"><a class="nav-link a" href="{{url('capitulos')}}" style="box-shadow: 0px 1px 0px black;">Capítulos</a></li>
                                <li  class="nav-item"><a class="nav-link a" href="{{url('midia')}}">Mídia</a></li>
                                <li  class="nav-item"><a class="nav-link a" href="{{ url('parcerias')}}">Parcerias</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            <!-- FIM Menu -->
            <!-- Logout -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="Imagens/seta-baixo.png" width="12">
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Opções
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <!-- <li><hr class="dropdown-divider"></li> -->
                                        <li><a class="dropdown-item" href="logout.php" style="color: red; font-weight: 700;">Encerrar Sessão</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- FIM Logout -->
            <!-- Exposição -->

            <center><h1 style="font-size: 40px; margin-top: 40px; font-family: impact;">CAPÍTULOS</h1></center>
            <center><hr class="col-md-4 featurette-divider"></center>

        <div class="container container-capitulos">
            <center>
                    <a href="{{ url('chapter1') }}"><img src="{{ url('Assets/Imagens/cap1-capa.jpg') }}" class="img-fluid cap-img" alt="capítulo 1"></a>
                    <a href="{{ url('chapter2') }}"><img src="{{ url('Assets/Imagens/cap2-capa.jpg') }}" class="img-fluid cap-img" alt="capítulo 2"></a>
                    <a href="{{ url('chapter3') }}"><img src="{{ url('Assets/Imagens/cap3-capa.jpg') }}" class="img-fluid cap-img" alt="capítulo 3"></a>
                    <a href="{{ url('chapter4') }}"><img src="{{ url('Assets/Imagens/cap4-capa.jpg') }}" class="img-fluid cap-img" alt="capítulo 4"></a>
                    <a href="capitulos/z-4cap.php"><img src="{{ url('Assets/Imagens/cap5-capa.jpg') }}" class="img-fluid cap-img" alt="capítulo 5"></a>
                    <a href="capitulos/z-4cap.php"><img src="{{ url('Assets/Imagens/cap6-capa.jpg') }}" class="img-fluid cap-img" alt="capítulo 6"></a>
            </center>
        </div>

        <div class="col-md-9" style="padding: 5px; margin-left: auto; margin-right: auto;">
            <table class="table">
                <div class="list-group">
                    <a href="capitulos/z-10cap.php" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">CAPÍTULO 9</h5>
                            <small style="color: LimeGreen;">Em Breve</small>
                        </div>
                        <p class="mb-1">A História de Jhon</p>
                    </a>
                    <a href="capitulos/z-9cap.php" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">CAPÍTULO 8</h5>
                            <small style="color: LimeGreen;">Em Breve</small>
                        </div>
                        <p class="mb-1">Jhon: Um recomeço</p>
                    </a>
                    <a href="capitulos/z-8cap.php" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">CAPÍTULO 7</h5>
                            <small style="color: LimeGreen;">Em Breve</small>
                        </div>
                        <p class="mb-1">Batalha entre as realidades</p>
                    </a>
                    <a href="capitulos/z-7cap.php" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">CAPÍTULO 6</h5>
                            <small style="color: LimeGreen;">Em Breve</small>
                        </div>
                        <p class="mb-1">Presos nos Anéis da Cosmologia</p>
                    </a>
                </div>
            </table>

   </div>         

            <!-- Social -->
                <div class="container-fluid container-social">
                    <p class="col copyright">Copyight Jvellucy by</p>
                    <p class="col copyright">© 2020 - 2023 thunderweb.com.br</p>
                    <div class="container-fluid social">
                        <a href="https://www.youtube.com/channel/UC0DHVm6CROqQ29kG1g02qBQ" target="_blank"><img src="{{ url('Imagens/logo-youtube.png') }}" class="img-fluid img-social" width="50"></a>
                        <a href="https://twitter.com/ThunderWeb1" target="_blank"><img src="{{ url('Imagens/logo-twitter.png') }}" class="img-fluid img-social" width="50"></a>
                        <a href="https://www.instagram.com/thunderweb_/" target="_blank"><img src="{{ url('Imagens/logo-insta.png') }}"   class="img-fluid img-social" width="50"></a>
                    </div>

                </div>

            <!-- FIM Social -->  

        </body>

     <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

     <script href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</html>