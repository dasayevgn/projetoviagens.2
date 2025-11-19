<html>

    <h1 class="ajuste3">Cadastro</h1>

    <form class="ajuste3" action="passagens.html">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        <label>Sobrenome:</label>
        <input type="text" name="nome" required><br><br>
        <label>Idade:</label>
        <input type="number" min="18" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="pwd">Senha:</label>
        <input type="password" id="pwd" name="pwd" required><br><br>
        <label for="pwd">Confirme a senha:</label>
        <input type="password" id="pwd" name="pwd" minlength="8" required><br><br>
        <input type="checkbox" name="termo" required> <!--required torna o preenchimento obrigatorio-->
        <label>Concordo com os termos de privacidade do Site</label><br><br>
        <input type="submit" value="Entrar">
    </form>

    

</html>