<?php

require_once "config.inc.php";

$id = $_GET["id"];

$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    $dados = mysqli_fetch_array($resultado);
?>

<h2>Alterar Cliente</h2>

<form action="?pg=clientes-alterar" method="post">

    <input type="hidden" name="id" value="<?=$dados['id']?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$dados['nome']?>" required><br><br>

    <label>Idade:</label>
    <input type="number" min="18" name="idade" value="<?=$dados['idade']?>" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?=$dados['email']?>" required><br><br>

    <label>Nova Senha (opcional):</label>
    <input type="password" name="senha" minlength="8"><br><br>

    <label>
        <input type="checkbox" name="termo" <?= $dados['termo'] ? "checked" : "" ?>>
        Aceito os termos
    </label><br><br>

    <input type="submit" value="Salvar Alterações">

</form>

<?php
} else {
    echo "<h2>Cliente não encontrado!</h2>";
}
?>