<?php

$titulo_pagina = "João Pessoa: Sol, Praia e História | Paraíba Viagens";
$cabecalho_h1 = "João Pessoa: Beleza Natural e Cultura Nordestina";
$cabecalho_p = "Conheça a cidade onde o sol nasce primeiro nas Américas, repleta de praias, história e encantos únicos.";
$ano_copyright = date("Y");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>

    <link rel="stylesheet" href="style-joaopessoa.css">
    <link href="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/b3/42/7f/photo3jpg.jpg?w=700&h=400&s=1" rel="stylesheet">
</head>
<body>

    <main class="jp-container">

        <!-- HERO -->
        <header class="hero">
            <div class="hero-content">
                <h1><?php echo $cabecalho_h1; ?></h1>
                <p><?php echo $cabecalho_p; ?></p>
                <a href="#conteudo" class="cta-button">Explorar João Pessoa</a>
            </div>
        </header>

        <!-- PRAIAS -->
        <section id="conteudo" class="section praias-section">
            <h2>🏖️ Praias Encantadoras de João Pessoa</h2>
            <div class="content-block">
                <p>
                    <b>João Pessoa</b> é famosa por suas praias de águas mornas e paisagens paradisíacas. 
                    A <b>Praia de Tambaú</b> é uma das mais movimentadas, com calçadão, quiosques e saída para passeios na <b>Ilha de Areia Vermelha</b>.
                </p>
                <p>
                    Já a <b>Praia de Cabo Branco</b> e a <b>Ponta do Seixas</b> — ponto mais oriental das Américas — 
                    são perfeitas para quem busca tranquilidade e contato com a natureza.
                </p>

                <img 
                    src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/b3/42/7f/photo3jpg.jpg?w=700&h=400&s=1"
                    alt="Praia de Cabo Branco - João Pessoa"
                    class="feature-image"
                />
            </div>
        </section>

        <hr>

        <!-- ESTAÇÃO CABO BRANCO -->
        <section class="section ecb-section">
            <h2>🏛️ Estação Cabo Branco – Arte, Ciência e Inovação</h2>
            <div class="content-block reverse">
                <img 
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRShga-o_D0Tw7FlZ57REINwEBJYdjuOqdkZA&s"
                    alt="Estação Cabo Branco - João Pessoa"
                    class="feature-image"
                />

                <p>
                    Projetada por Oscar Niemeyer, a <b>Estação Cabo Branco</b> é um dos principais cartões-postais da cidade. 
                    Com arquitetura única, o local abriga exposições, eventos culturais, salas interativas e mirantes.
                </p>
                <p>
                    Além da vista privilegiada, a área ao redor é perfeita para caminhadas, fotos e contemplação da natureza.
                </p>
            </div>
        </section>

        <hr>

        <!-- CENTRO HISTÓRICO -->
        <section class="section centro-section">
            <h2>🏰 Centro Histórico – Cultura e Tradição</h2>
            <div class="content-block">
                <p>
                    O <b>Centro Histórico de João Pessoa</b> preserva construções coloniais, igrejas seculares e praças tradicionais. 
                    Locais como o <b>Hotel Globo</b>, a <b>Igreja de São Francisco</b> e o <b>Centro Cultural São Francisco</b>
                    contam a história da terceira cidade mais antiga do Brasil.
                </p>
                <p>
                    As ruas coloridas e a atmosfera cultural tornam o passeio inesquecível para turistas de todas as idades.
                </p>

                <img 
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQGZ_t5NPntrQIPEU00ct2A0U4KG0fh8VfOA&s"
                    alt="Centro Cultural São Francisco - João Pessoa"
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

            
        
