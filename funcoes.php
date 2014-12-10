<?php

//NÚMERO DE PRODUTOS CADASTRADOS:
$contador = "select count(*) as total_produtos from produto";
$query = mysql_query($contador);
$exibir = mysql_fetch_array($query);

//SOMA
$soma = "SELECT SUM(preco) valor_somado FROM produto";
$query2 = mysql_query($soma);
$exibir2 = mysql_fetch_array($query2);

//MÉDIA
$media = "select avg(preco) media_precos from produto";
$query3 = mysql_query($media);
$exibir3 = mysql_fetch_array($query3);

//MAIOR PREÇO
$maior_preco = "select max(preco) maximo from produto";
$query4 = mysql_query($maior_preco);
$exibir4 = mysql_fetch_array($query4);

//MENOR PREÇO
$menor_preco = "select min(preco) minimo from produto";
$query5 = mysql_query($menor_preco);
$exibir5 = mysql_fetch_array($query5);

//NOME MAIOR
$maior_nome = "SELECT nome nomemaior FROM produto WHERE preco IN (SELECT MAX(preco) FROM produto)";
$query6 = mysql_query($maior_nome);
$exibir6 = mysql_fetch_array($query6);

//NOME MENOR
$menor_nome = "SELECT nome nomemenor FROM produto WHERE preco IN (SELECT min(preco) FROM produto)";
$query7 = mysql_query($menor_nome);
$exibir7 = mysql_fetch_array($query7);