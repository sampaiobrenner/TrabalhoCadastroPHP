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
                                <li class="active">
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
                <h3>Listagem de Produtos</h3>
            </div>

            <!-- 
            ---------------------------------------------------------------------------------------------------------------------------------------
                   INICIO Conteudo 
            ---------------------------------------------------------------------------------------------------------------------------------------
            -->

            <div class="panel panel-default">
                <div class="panel-body">

                    <table class="table table-striped table-responsive">
                        <tr><td>Cód: </td>
                            <td>Produto: </td>
                            <td>Preço: </td>
                            <td>Ação: </td>
                        </tr>

                        <?php
                        $excluir = '<span class="glyphicon glyphicon-remove"> </span>';
                        $alterar = '<span class="glyphicon glyphicon-pencil"> </span>';
                        ?>

                        <?php
                        $sql = "select * from produto order by id";
                        $dados = mysql_query($sql);
                        while ($linha = mysql_fetch_array($dados)) {
                            $id = $linha["id"];
                            $nome = $linha["nome"];
                            $preco = $linha["preco"];
                            $acoes = " <a href=exclui.php?id=$id onclick='return deletar();'>$excluir</a> &nbsp &nbsp <a href=altera.php?id=$id>$alterar</a> ";
                            
                            $auxpreco = number_format($preco,2,",",".");
                            
                            echo "<tr><td> $id </td>";
                            echo "<td> $nome </td>";
                            echo "<td> $auxpreco </td>";
                            echo "<td> $acoes </td>";
                        }
                        mysql_close($conecta);
                        ?>
                    </table>

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