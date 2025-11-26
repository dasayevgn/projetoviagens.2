<?php

require_once "config.inc.php";

$sql = "SELECT * FROM clientes ORDER BY id DESC";
$resultado = mysqli_query($conexao, $sql);

echo "<a href='?pg=clientes-form'>Cadastrar Cliente</a>";

echo "<h2>Lista de Clientes</h2><hr>";

if (mysqli_num_rows($resultado) > 0) {
    while($dados = mysqli_fetch_array($resultado)) {

        echo "ID: " . $dados['id'] . "<br>";
        echo "Nome: " . $dados['nome'] . "<br>";
        echo "Idade: " . $dados['idade'] . "<br>";
        echo "Email: " . $dados['email'] . "<br>";
        echo "Termo Aceito: " . ($dados['termo'] ? "Sim" : "Não") . "<br>";

        echo "<a href='?pg=clientes-form-alterar&id={$dados['id']}'>Editar</a>";
        echo " | <a href='?pg=clientes-excluir&id={$dados['id']}'>Excluir</a>";
        echo "<hr>";

    }
} else {
    echo "Nenhum cliente cadastrado!";
}
?>