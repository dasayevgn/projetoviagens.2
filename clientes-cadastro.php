<?php

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $termo = isset($_POST["termo"]) ? 1 : 0;

    $sql = "INSERT INTO clientes (nome, idade, email, senha, termo)
            VALUES ('$nome', $idade, '$email', '$senha', $termo)";

    if(mysqli_query($conexao, $sql)){
        echo "<h3>Cliente cadastrado com sucesso!</h3>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    } else {
        echo "<h3>Erro ao cadastrar cliente!</h3>";
        echo mysqli_error($conexao);
    }

} else {
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}

mysqli_close($conexao);
?>