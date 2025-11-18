<?php


$titulo_pagina = "Sousa: Onde a História Encontra o Sertão | Paraíba Viagens";
$cabecalho_h1 = "Sousa: Onde a História Encontra o Sertão";
$cabecalho_p = "Descubra a Terra dos Dinossauros e a riqueza cultural da Paraíba.";
$ano_copyright = date("Y"); // Pega o ano atual (ex: 2025)

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title> <link rel="stylesheet" href="style-sousa.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <main class="sousa-container">

        <header class="hero">
            <div class="hero-content">
                <h1><?php echo $cabecalho_h1; ?></h1> <p><?php echo $cabecalho_p; ?></p> <a href="#conteudo" class="cta-button">Explorar o Vale</a>
            </div>
        </header>

        <section id="conteudo" class="section dinossauros-section">
            <h2>🦕 O Famoso Vale dos Dinossauros</h2>
            <div class="content-block">
                <p>
                    A cidade de <b>Sousa</b>, localizada no sertão paraibano, é mundialmente famosa por abrigar o <b>Monumento Natural Vale dos Dinossauros</b>. Este sítio paleontológico impressionante contém a maior concentração de pegadas de dinossauros do mundo, datadas de milhões de anos. É um testemunho vivo da era Mesozoica, oferecendo aos visitantes uma viagem inigualável no tempo.
                </p>
                <p>
                    As trilhas fossilizadas, visíveis no leito do Rio do Peixe, revelam rastros de diversas espécies, incluindo carnívoros e herbívoros gigantes. A preservação das pegadas, graças às condições climáticas únicas da região, faz de Sousa um ponto de referência científica e turística essencial no Nordeste brasileiro.
                </p>
               <img src="https://sigep.eco.br/sitio026/fig6.jpg"
     alt="Paisagem do Vale dos Dinossauros em Sousa, Paraíba com pegadas de dinossauros" class="feature-image"/>
            </div>
        </section>

        <hr>

        <section class="section cultural-section">
            <h2>🌵 Comentário Cultural e Identidade</h2>
            <div class="content-block reverse">
                <img src="https://www.diariodosertao.com.br/wp-content/uploads/2014/06/festa.jpg"
                     alt="Representação da cultura e sertão de Sousa, Paraíba" class="feature-image"/>
                <p>
                    Mais do que apenas fósseis, a cultura de Sousa é intrinsecamente ligada à <b>força e resiliência do povo sertanejo</b>. A identidade local é moldada pelo clima semiárido, pela religiosidade e pelas ricas tradições nordestinas. O contraste entre o passado pré-histórico monumental e a vida simples e forte do sertanejo cria um tecido cultural único.
                </p>
                <p>
                    Eventos locais, feiras e a gastronomia típica (como a carne de sol e o bode) refletem a autenticidade e o acolhimento paraibano. A experiência em Sousa não é apenas ver dinossauros; é <b>sentir o pulsar do sertão</b>, compreendendo a história que está tanto na pedra quanto na alma de seu povo. É uma fusão de ciência, natureza e humanidade.
                </p>
            </div>
        </section>

        <footer class="rodape">
            <p>© <?php echo $ano_copyright; ?> Paraíba Viagens | Descubra Sousa e suas histórias milenares.</p> </footer>
        <?php
        
        ?>
    </main>

</body>
</html>