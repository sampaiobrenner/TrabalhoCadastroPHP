<?php

// define uma conexão com o banco de dados
$conecta = mysql_connect("localhost", "root");

// seleciona um banco da conexão definida
mysql_select_db("estoque", $conecta);
