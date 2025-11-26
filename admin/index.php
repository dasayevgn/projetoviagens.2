<?php

echo "<h1>Painel administrativo</h1>";

echo "<a href='?pg=clientes-admin'>Listar Clientes</a> | ";
echo "<a href='?pg=mensagens'>Listar Mensagens</a> | ";

echo "<hr>";

if (empty($_GET["pg"])) {

    echo "<h3>Bem-vindo ao painel admin.</h3>";

} else {

    $pg = $_GET["pg"] . ".php";

    if (file_exists($pg)) {
        include_once $pg;
    } else {
        echo "<h3>Página não encontrada!</h3>";
    }
}

?>