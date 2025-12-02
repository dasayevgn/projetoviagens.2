<?php

require_once "config.inc.php";

$id = (int) $_GET["id"];

$sql = "DELETE FROM clientes WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    echo "<h3>Cliente excluído!</h3>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
} else {
    echo "<h3>Erro ao excluir!</h3>";
    echo mysqli_error($conexao);
}

mysqli_close($conexao);
?>