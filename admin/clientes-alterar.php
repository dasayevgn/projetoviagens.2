<?php

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $termo = isset($_POST["termo"]) ? 1 : 0;

    if (!empty($_POST["senha"])) {
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $senha_sql = ", senha='$senha'";
    } else {
        $senha_sql = "";
    }

    $sql = "UPDATE clientes SET 
            nome='$nome',
            idade=$idade,
            email='$email',
            termo=$termo
            $senha_sql
            WHERE id=$id";

    if(mysqli_query($conexao, $sql)){
        echo "<h3>Cliente alterado com sucesso!</h3>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    } else {
        echo "<h3>Erro ao alterar cliente!</h3>";
        echo mysqli_error($conexao);
    }

} else {
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}

mysqli_close($conexao);
?>