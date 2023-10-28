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
                                <li  class="nav-item"><a class="nav-link" href="#quemsomos">Quem Somos</a></li>
                                <li  class="nav-item"><a class="nav-link" href="#loja">Livros</a></li>
                                <div class="vr"></div>
                                <li  class="nav-item"><a class="nav-link" href="{{ url('capitulos') }}">Capítulos</a></li>
                                <li  class="nav-item"><a class="nav-link" href="{{ url('midia') }}">Mídia</a></li>
                                <li  class="nav-item"><a class="nav-link" href="{{ url('parcerias')}}">Parcerias</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            <!-- FIM Menu -->
            <!-- Perfil ou Deslog -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#" style="padding: 0px 20px; font-weight: 700;">{{ auth()->user()->name }}</a>
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

            <main class="body-background" style="background-image: url('Assets/Imagens/45-3.png');
                                                background-repeat: no-repeat;
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

            <!-- Exposição -->
            <main class="container-fluid" id="quemsomos">
                <div class="container-fluid" id="container-titulo">
                    <center><img src="{{ url('Assets/Imagens/home-logo-circular.png') }}" class="img-thumbnail logo-titulo" width="100"></center>
                    <center><hr class="col-md-4 featurette-divider"></center>
                </div>

                <div class="container-fluid apresentacao" >
                        <h1 class="titulo">APRESENTAÇÃO</h1>
                        <p class="col-md">A Thunderweb iniciou seus projetos em 2020, com o intuito de divulgar e apresentar trabalhos ilustrativos. Dedicado, por uma história,
                        Felipe Costa desenvolveu a ThunderWeb, publicou seu primeiro livro e trabalha no desenvolvimento de um novo mangá, adaptando a história
                        tema deste website. Temos a finalidade de expor trabalhos futuros, divulgar fanarts e chamar a atenção de novos criadores dentro da
                        transparência deste website. Vamos estar atentos para atualizar a cada semana.</p>

                </div>

                <div class="container-fluid" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="container-fluid bd-callout bd-callout-info">
                        <img src="{{ url('Assets/Imagens/pixelThunder.png') }}" class="img-fluid" width="100">
                        <div class="container-fluid display-pixel">
                            <h2 class="nome-autor">Felipe Costa</h2>
                            <p class="col-md">Responsável pela programação geral deste web site. Autor mangaká e desenhista responsavel
                            pela primeira edição do livro Thunder: Endless Civil War Desinformation</p>
                            <a href="https://www.linkedin.com/in/felipe-costa-20a12b262/" target="_blank">Conheça Felipe</a>
                        </div>
                    </div>

                    <div class="container-fluid bd-callout bd-callout-info">
                        <img src="{{ url('Assets/Imagens/pixelEneias.png') }}" class="img-fluid" width="100">
                        <div class="container-fluid display-pixel">
                            <h2 class="nome-autor">Eneias Ramos</h2>
                            <p class="col-md">Encarregou-se por uma das etapas do desenvolvimento deste web site. Incluindo banco de dados e aumento na segurança para os visitantes que desejam se cadastrar</p>
                            <a href="https://www.linkedin.com/in/eneiasramos/" target="_blank">Conheça Eneias</a>
                        </div>
                    </div>

                    <div class="container-fluid bd-callout bd-callout-info">
                        <img src="{{ url('Assets/Imagens/pixelUlisses.png') }}" class="img-fluid" width="100">
                        <div class="container-fluid display-pixel">
                            <h2 class="nome-autor">Ulisses Josep</h2>
                            <p class="col-md">Desenhista qualificado e mangaká afiliado à empresa. Responsável pela produção do atual e futuros mangá's</p>
                            <a href="https://www.instagram.com/ulissesdesenhista/" target="_blank">Conheça Ulisses</a>
                        </div>
                    </div>

                    <div class="container-fluid bd-callout bd-callout-info">
                        <img src="{{ url('Assets/Imagens/pixelJosue.png') }}" class="img-fluid" width="100">
                            <div class="container-fluid display-pixel">
                            <h2 class="nome-autor">Josué Gomes</h2>
                            <p class="col-md">Patrocinador, dono da empresa de vendas J.Vellucy. Autor dos Livros: Filhos da Pervesão e antologias publicadas.</p>
                            <a href="https://www.linkedin.com/in/josue-gomes-do-nascimento-b4b72474/?originalSubdomain=br" target="_blank">Conheça Josué</a>
                        </div>
                    </div>

                    <div class="container-fluid bd-callout bd-callout-info">
                        <img src="{{ url('Assets/Imagens/pixelPablo.png') }}" class="img-fluid" width="100">
                        <div class="container-fluid display-pixel">
                            <h2 class="nome-autor">Pablo Vilas</h2>
                            <p class="col-md">Encarregou-se por uma das etapas do desenvolvimento deste web site. Incluindo estruturas em Java Script na atuação de formulários</p>
                            <a href="https://www.linkedin.com/in/pablo-vilas-boas-508035210/" target="_blank">Conheça Pablo</a>
                        </div>
                    </div>

                    <div class="container-fluid bd-callout bd-callout-info">
                        <img src="{{ url('Assets/Imagens/pixelNonim.png') }}" class="img-fluid" width="100">
                        <div class="container-fluid display-pixel">
                            <h2 class="nome-autor">Nonim Soares</h2>
                            <p class="col-md">Encarregou-se pelo desenvolvimento de personagens em pixel arte que representam cada integrante da equipe.</p>
                            <a href="https://www.instagram.com/nonim_official/" target="_blank">Conheça Nonim</a>
                        </div>
                    </div>
                </div>
            </main>
            <!-- FIM Exposição -->

            <!-- Compras -->
            <div class="container-fluid" id="loja">
                    <div class="row container-display">
                        <div class="row container-comprar">
                            <div class="card">
                                <img src="{{ url('Assets/Imagens/filhos-da-perversao.png') }}" class="card-img-top img-livro">
                                <div class="card-body">
                                    <h6 class="card-title">Filhos da Perversão: A Leitura é um Caminho sem Volta</h6>
                                    <h6 class="card-title">Categoria: Filosofia</h7>
                                    <h3 class="card-text" id="card-text">R$ 44,90</h3>
                                    <p class="card-text" style="margin-bottom: 20px;">até 5x de 9,78</p>
                                    <hr class="dropdown-divider">
                                    <center><a href="https://www.jvellucy.com.br/filhos-da-perversao" class="card-text comprar" type="button" style="color: black; margin-top: 20px;">COMPRAR</a></center>
                                </div>
                            </div>
                        </div>

                        <div class="row container-comprar">
                            <div class="card">
                                <img src="{{ url('Assets/Imagens/thunder.png') }}" class="card-img-top img-livro">
                                <div class="card-body">
                                    <h6 class="card-title">THUNDER - Association Of Heroes</h6>
                                    <h6 class="card-title">Categoria: Ficção Científica</h7>
                                    <h3 class="card-text" id="card-text">R$ 28,50</h3>
                                    <p class="card-text" style="margin-bottom: 40px;">até 3x de R$ 9,50</p>
                                    <hr class="dropdown-divider">
                                    <center><a href="" class="card-text comprar" type="button" style="color: black; margin-top: 20px;">COMPRAR</a></center>
                                </div>
                            </div>
                        </div>

                        <div class="row container-comprar">
                            <div class="card">
                                <img src="{{ url('Assets/Imagens/thunder-cap1.png') }}" class="card-img-top img-livro">
                                <div class="card-body">
                                    <h6 class="card-title">Thunder: Association of Heroes - Capítulo 1: Guerras Ideológicas</h6>
                                    <h6 class="card-title">Categoria: Mangá </h7>
                                    <h3 class="card-text" id="card-text">R$ 65,90</h3>
                                    <p class="card-text">até 5x de 13,18</p>
                                    <hr class="dropdown-divider">
                                    <center><a href="" class="card-text comprar" type="button" style="color: black; margin-top: 20px;">COMPRAR</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- FIM Compras -->
        </body>

     <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

     <script href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</html>
