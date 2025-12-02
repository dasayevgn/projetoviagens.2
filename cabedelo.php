<?php

$titulo_pagina = "Cabedelo: Entre Mar, Fortaleza e História | Paraíba Viagens";
$cabecalho_h1 = "Cabedelo: Mar, Fortaleza e Cultura Viva";
$cabecalho_p = "Explore o litoral paraibano, suas praias encantadoras e o famoso pôr do sol do Jacaré.";
$ano_copyright = date("Y");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>

    <link rel="stylesheet" href="style-cabedelo.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <main class="cabedelo-container">

        <header class="hero">
            <div class="hero-content">
                <h1><?php echo $cabecalho_h1; ?></h1>
                <p><?php echo $cabecalho_p; ?></p>
                <a href="#conteudo" class="cta-button">Explorar Cabedelo</a>
            </div>
        </header>

        <section id="conteudo" class="section praias-section">
            <h2>🏖️ As Praias Deslumbrantes de Cabedelo</h2>
            <div class="content-block">
                <p>
                    <b>Cabedelo</b> é um dos destinos mais encantadores do litoral da Paraíba.
                    Suas praias, como <b>Areia Vermelha</b>, um banco de areia que surge em meio ao mar,
                    são verdadeiros cartões-postais. O cenário paradisíaco e as águas cristalinas atraem turistas o ano inteiro.
                </p>
                <p>
                    Outros locais como <b>Praia de Intermares</b> e <b>Ponta de Campina</b> são ideais para quem busca tranquilidade ou aventura.
                    Intermares, por exemplo, é famosa por ser ponto de observação das tartarugas marinhas.
                </p>

                <img 
                    src="https://upload.wikimedia.org/wikipedia/commons/8/82/Parque_Estadual_Marinho_de_Areia_Vermelha%2C_Cabedelo_%28PB%29.jpg"
                    alt="Vista aérea da Praia de Areia Vermelha, Cabedelo - Paraíba"
                    class="feature-image"
                />
            </div>
        </section>

        <hr>

        <section class="section forte-section">
            <h2>🏰 Forte de Santa Catarina – Patrimônio Histórico</h2>
            <div class="content-block reverse">
                <img 
                    src="https://upload.wikimedia.org/wikipedia/commons/8/85/Interior_do_Forte_Cabedelo_-_Jo%C3%A3o_Pessoa.jpg"
                    alt="Forte de Santa Catarina em Cabedelo, Paraíba"
                    class="feature-image"
                />

                <p>
                    O <b>Forte de Santa Catarina</b> é uma das maiores relíquias históricas da Paraíba.
                    Construído no século XVI, o forte protegeu o litoral de invasões estrangeiras e ainda hoje
                    preserva sua estrutura original. Caminhar por seus corredores é viajar pela história militar brasileira.
                </p>
                <p>
                    Além disso, o forte oferece uma vista magnífica do porto, do mar e do encontro entre o Rio Paraíba e o oceano.
                    É um ponto indispensável para quem deseja conhecer a essência cultural de Cabedelo.
                </p>
            </div>
        </section>

        <hr>

        <section class="section por-do-sol-section">
            <h2>🌅 Pôr do Sol do Jacaré – Um Espetáculo Único</h2>
            <div class="content-block">
                <p>
                    Nenhuma visita a Cabedelo é completa sem vivenciar o famoso <b>Pôr do Sol do Jacaré</b>.
                    O momento é acompanhado pelo tradicional sax tocando “Bolero de Ravel”, criando um cenário emocionantemente único.
                </p>
                <p>
                    Turistas, moradores, artistas e artesãos se juntam ao longo do píer para apreciar o espetáculo.
                    Um ambiente vibrante, cheio de cultura, musicalidade e boas energias.
                </p>

                <img 
                    src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/be/a9/17/caption.jpg?w=1200&h=-1&s=1"
                    alt="Pôr do Sol do Jacaré em Cabedelo, Paraíba"
                    class="feature-image"
                />
            </div>
        </section>

         <?php
                echo "<a href='?pg=passagens'>Voltar</a>";
            ?>


    </main>

</body>
</html>
