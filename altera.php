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
                <h3>Alteração de Produtos</h3>
            </div>

            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                   INICIO Conteudo 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                    $id = $_GET["id"];
                    $sql = "select * from produto where id = $id";
                    $dados = mysql_query($sql);
                    while ($linha = mysql_fetch_array($dados)) {
                        $id = $linha["id"];
                        $nome = $linha["nome"];
                        $preco = $linha["preco"];
                    }
                    mysql_close($conecta);
                    ?>

                    <form method="post" action="altera2.php">
                        <label for="id">ID do produto:</label>
                        <input class="form-control" type="text" name="id" id="id " size="30" value="<?php echo "$id"; ?>" readonly>
                        <br>
                        <label for="nome">Nome do produto:</label>
                        <input class="form-control" type="text" name="nome" id="nome " value="<?php echo "$nome"; ?>" required>
                        <br>
                        <label for="preco">Preço do produto:</label>
                        <input class="form-control" type="text" name="preco" id="preco " value="<?php echo number_format($preco,2,",","."); ?>" required>
                        <br><br>
                        <input class="btn btn-large btn-primary" type="submit" value="Alterar">
                    </form>
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