<!DOCTYPE html>
<html>
    <title>Capitulos</title>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


        <link rel="icon" href="Imagens/home-logo.png">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
        /* Usuario */

        .navbar navbar-dark bg-dark {
        position: fixed;
        }

        #logout {
        font-family: sans-serif;
        font-size: 15px;
        font-weight: 700;
        color: red;
        padding: 5px 0px;
        transition: all 0.5s;
        text-decoration: none;
        }

        #logout:hover {
        box-shadow: 0px 1px 0px white; 
        }

        /* Usuario */

        /* MENU */

        .container {
        box-shadow: 0px 0px 1px white;
        width: 1000px;
        margin-top: 20px;
        padding: 20px; 
        }

        li {

        list-style: none;
        display: inline-block;
        padding: 45px;
        }

        #a-2 {
        text-decoration: none;
        color: red;
        padding: 10px;
        font-size: 20px;
        font-weight: 700;
        }

        /* FIM MENU */



        /* Páginas */

        #container-paginas {
        margin-top: 25px;
        }

        #paginas-manga {
            margin-top: 10px;
        }


        /* Social */

        #container-social {
        background: black;
        padding: 50px;
        margin-top: 400px;
        }

        #copyright {
        font-family: sans-serif;
        text-align: center;
        color: white;    
        }

        #social {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        margin-bottom: 50px;
        }

        #img-social {
        padding: 10px;
        border-radius: 35%;
        }

        </style>

    </head>
    <body style="background: white">

        <!-- Logout -->

        <center>
            <nav class="navbar-dark bg-dark"  style="padding: 30px;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </center>

        <center>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <li type="button" value="Voltar" onClick="JavaScript: window.history.back();" id="a-2">Voltar</li>
                </div>
            </div>
        </center>
        
        <div class="container-fluid" id="container-paginas">
            <center><img class="img-fluid" src="{{ url('Assets/Manga/Imagens/EMBREVE.png')}}" width="1200" id="paginas-manga" style="box-shadow: 0px 0px 0px 1px black;"></center>
        
        </div>

        <div class="container-fluid" id="container-social">
            <p class="col" id="copyright">© 2021 - 2022 thunderweb.com.br</p>
            <div class="container-fluid" id="social">
            <a href="https://www.youtube.com/@thunderweb3138" target="_blank"><img src="Imagens/logo-youtube.png" class="img-fluid" id="img-social" width="50"></a>
                <a href="https://www.instagram.com/thunderweb_/" target="_blank"><img src="Imagens/logo-insta.png"   class="img-fluid" id="img-social" width="50"></a>
            </div>
        </div>
        <!-- FIM Social -->  
    </body>

    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</html>