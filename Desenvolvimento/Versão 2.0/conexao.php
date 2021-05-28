<?php

$servidor = 'liberacaoteste.mysql.dbaas.com.br';
$usuario = 'liberacaoteste';
$senha = 'liberacao7212';
$banco = "liberacaoteste";
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->conect_errno.")".$mysqli->connet_errno;
?>