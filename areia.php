<!DOCTYPE html>
<?php
$titulo_pagina = "Areia: História, Cultura e Encantos da Serra | Paraíba Viagens";
$cabecalho_h1 = "Areia: Encantos da Serra da Borborema";
$cabecalho_p = "Explore a cidade que respira história, arte, engenhos e natureza.";
$ano_copyright = date("Y");
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>

    <!-- CSS separado -->
    <link rel="stylesheet" href="style-areia.css">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<main class="areia-container">

    <!-- HERO -->
    <header class="hero">
        <div class="hero-content">
            <h1><?php echo $cabecalho_h1; ?></h1>
            <p><?php echo $cabecalho_p; ?></p>
            <a href="#conteudo" class="cta-button">Explorar Areia</a>
        </div>
    </header>

    <!-- SEÇÃO 1 – Centro Histórico -->
    <section id="conteudo" class="section historia-section">
        <h2>🏛️ Centro Histórico Tombado</h2>

        <div class="content-block">
            <p>
                A cidade de <b>Areia</b> é uma joia arquitetônica da Serra da Borborema. Seu centro histórico
                preservado, tombado pelo <b>IPHAN</b>, revela casarões coloniais, ruas de pedra,
                igrejas históricas e uma atmosfera que transporta qualquer visitante para o século XIX.
            </p>

            <p>
                Caminhar por Areia é vivenciar a herança cultural da Paraíba em cada detalhe. Museus,
                teatros, ateliês e construções centenárias compõem um cenário que respira arte, memória
                e identidade nordestina.
            </p>

            <img src="https://s2-g1.glbimg.com/c_4AEm_Ie8G5MXyc89NI6zOCSG4=/0x0:1280x958/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/c/T/XahwZnQ6uursGGdhkKiQ/jose-rufino.jpeg"
                 alt="Centro histórico de Areia, Paraíba"
                 class="feature-image">
        </div>
    </section>

    <hr>

    <!-- SEÇÃO 2 – Engenhos e Cultura -->
    <section class="section engenho-section">
        <h2>🥃 Engenhos, Cachaça e Cultura Nordestina</h2>

        <div class="content-block reverse">
            <img src="https://s2-g1.glbimg.com/nAya-Vz4LtMvmQ1mCHVeorRoQ5U=/0x0:5464x3070/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2021/G/8/ybgcTaRSKQtLSzNenCow/engenho-areia.jpg"
                 alt="Engenho Triunfo em Areia, Paraíba"
                 class="feature-image">

            <p>
                Areia é famosa pelos seus tradicionais <b>engenhos de cachaça</b>, que recebem turistas
                durante todo o ano. A produção artesanal, os alambiques e as degustações tornam a visita
                uma experiência rica e saborosa.
            </p>

            <p>
                Além da cachaça, Areia valoriza a cultura regional: teatro, música, artesanato,
                gastronomia e festivais movimentam a cidade. Um destino que une tradição, natureza
                e o melhor do acolhimento paraibano.
            </p>
        </div>
    </section>

    <!-- RODAPÉ -->
    <footer class="rodape">
        <p>© <?php echo $ano_copyright; ?> Paraíba Viagens | Areia, cultura e tradição na Serra.</p>
    </footer>

</main>

</body>
</html>
