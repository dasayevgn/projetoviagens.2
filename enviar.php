<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $assunto = $_POST["assunto"];
        $mensagem = $_POST["mensagem"];

        $sql = "INSERT INTO assuntos (nome, email, assunto, mensagem)
                VALUES ('$nome', '$email', '$assunto', '$mensagem')";
        if(mysqli_query($conexao, $sql)){
            echo "<h3>Mensagem enviada com sucesso!</h3>";
            echo "<a href='?pg=faleconosco'>Voltar</a>";
        }else{
            echo "<h3>Erro ao enviar mensagem!</h3>";
            echo "<a href='?pg=faleconosco'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado!</h2>";
        echo "<a href='?pg=faleconosco'>Voltar</a>";
    }
    
    mysqli_close($conexao);