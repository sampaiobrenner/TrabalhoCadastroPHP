<?php
include("conexao.php");
include("funcoes.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Supermercado Avenida</title>
        <meta charset="utf8">
        <script src="js/funcoes.js"></script>
        <link href="css/estilos.css" rel="stylesheet">
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
                                <li class="active">
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
                <h3>Resumo de Produtos</h3>
            </div>

            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                   INICIO Conteudo 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <form>
                        <p><label for="total">O número total de produtos é:</label><br>
                            <input class="form-control" type="text" name="total" id="total " size="10" value="<?php echo $exibir['total_produtos']; ?>" readonly>
                        </p>

                        <p><label for="soma">A soma dos preços é igual a:</label><br>
                            <input  class="form-control"type="text" name="soma" id="soma " size="10" value="<?php echo number_format($exibir2['valor_somado'],2,",","."); ?>" readonly>
                        </p>  
                        <p><label for="media">A média dos preços é igual a:</label><br>
                            <input class="form-control" type="text" name="media" id="media " size="10" value="<?php echo number_format($exibir3['media_precos'],2,",","."); ?>" readonly>
                        </p>   
                        <p><label for="maximo">O produto com o maior preço é: <span class="text-danger">( <?php echo $exibir6['nomemaior']; ?> )</span> O preço desse produto é: </label><br>
                            <input class="form-control" type="text" name="maximo" id="maximo " size="10" value="<?php echo number_format($exibir4['maximo'],2,",","."); ?>" readonly>
                        </p>   
                        <p><label for="minimo">O produto com o menor preço é: <span class="text-danger">( <?php echo $exibir7['nomemenor']; ?> )</span> O preço desse produto é: </label><br>
                            <input class="form-control" type="text" name="minimo" id="minimo " size="10" value="<?php echo number_format($exibir5['minimo'],2,",","."); ?>" readonly>
                        </p> 
                    </form>
                </div>
            </div>
            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                   FIM Conteudo 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->
            <?php
            mysql_close($conecta);
            ?>
        </div>

    </body>
</html>