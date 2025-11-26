<h2>Cadastro de Cliente</h2>

<form action="?pg=clientes-cadastro" method="post">

    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Idade:</label>
    <input type="number" name="idade" min="18" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Senha:</label>
    <input type="password" name="senha" minlength="8" required><br><br>

    <label>
        <input type="checkbox" name="termo" required>
        Aceito os termos
    </label><br><br>

    <input type="submit" value="Cadastrar Cliente">

</form>