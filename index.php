<?php
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qualitec agro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" src="js/funcoes.js">
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="#home">
                <img src="img/logoTopo.jpg" alt="logo" style="width:40px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->

            <div class="collapse navbar-collapse minhas-fontes" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#parceiros">Parceiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#representantes">Representantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#localizacao">localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--fim do menu -->

        <!--inicio slide -->
        <div class="espaco-topo">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/carousel/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/carousel/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/carousel/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--fim  slide -->
    </header>


    <main class="container">
        <section>
            <div id="home" class="container-fluid">
                <h1>home</h1>
            </div>
            <div id="servicos" class="container-fluid">
                <h1>Serviços</h1>

            </div>
            <div id="parceiros" class="container-fluid">
                <h1>Parceiros</h1>
            </div>
            <div id="representantes" class="container-fluid">
                <h1>Representantes</h1>
            </div>
            <div id="localizacao" class="container-fluid">
                <h1>Localização</h1>
            </div>

        </section>
        <!-- link whatsapp-->
        <a href="https://api.whatsapp.com/send?phone=5532984050969&text=Olá!" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </main>

    <footer>

        <p id="rodape"> &copy; 2021 - CodePrime</p>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>