<?php
    echo "<h2>Fale Conosco</h2>";
?>
<link rel="stylesheet" href="faleconosco.css">
<form action="?pg=enviar" method="post">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome"><br>
    </div>
    <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>
    <div class="mb-3 mt-3">
        <label>Assunto:</label>
        <input type="text" name="assunto"><br>
    </div>
    <div class="mb-3 mt-3">
        <label>Mensagem:</label>
        <textarea type="text" placeholder="Sua mensagem" name="mensagem"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
