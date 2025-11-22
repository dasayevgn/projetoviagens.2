<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM assuntos";

    $resultado = mysqli_query($conexao, $sql);


    echo "<h2>Lista de Mensagens</h2><hr>";

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {
            echo "Nome: " . $dados['nome'] . "<br>";
            echo "Email: " . $dados['email'] . "<br>";
            echo "Assunto: " . $dados['assunto'] . "<br>";
            echo "Mensagem: " . $dados['mensagem'] . "<br>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum cliente cadastrado!";
    }
