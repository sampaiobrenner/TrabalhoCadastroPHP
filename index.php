<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Supermercado Avenida</title>
        <meta charset="utf8">
        <script src="js/funcoes.js"></script>
        <link href="css/estilos.css" rel="stylesheet">
        <script src="js/cookie.js"></script>
        <!-- 
        ---------------------------------------------------------------------------------------------------------------------------------------      
               Início Bootstrap 
        ---------------------------------------------------------------------------------------------------------------------------------------
        -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- 
        ---------------------------------------------------------------------------------------------------------------------------------------      
               Fim Bootstrap 
        ---------------------------------------------------------------------------------------------------------------------------------------
        -->

    </head>
    <body>
        <div class="container-fluid">

            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                   INICIO Menu 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <nav class="navbar navbar-default" role="navigation">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">Supermercado Avenida</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="cadastro.php"> Cadastro de Produtos </a>
                                </li>
                                <li>
                                    <a href="listagem.php"> Listagem de Produtos </a>
                                </li>
                                <li>
                                    <a href="resumo.php"> Resumo de Produtos </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>

            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                    FIM Menu 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->

            <div class="page-header">
                <h3 id="usuario">Olá Visitante!</h3>
                <a href="#" onclick="gravaCookie();"> <small> ( Trocar Usuário! ) </small> </a>
            </div>

            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                   INICIO Conteudo 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->
            <div class="row clearfix">
                <div class="col-md-4 column">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="imagens/1.jpg" class="img-responsive"  alt="Responsive image">
                        </div>
                    </div>

                </div>
                <div class="col-md-4 column">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="imagens/2.jpg" class="img-responsive"  alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 column">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="imagens/3.jpg" class="img-responsive"  alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                    FIM Conteudo 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->
        </div>
    </body>
</html>