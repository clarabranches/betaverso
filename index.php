<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>BetaVerso</title>
  <link rel="icon" href="img/user.png" type="image/png">

  <link rel="stylesheet" href="css/geral.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/conteiner.css">

</head>

<body>

  <?php include 'itens/navbar.php'; ?>
  
<!-- INICIAL -->
  <section class="image-destaque">
    <img src="./img/destaque.png" width="100%" alt="Destaque Beta">
  </section>


<!-- DESTAQUES DO UNIVERSO BETA -->
  <section class="canais">
  <div class="text">
    <h3>CANAIS</h3>            
  </div>  
  

    <div class="cards">

        <!-- YouTube -->
        <div class="card" data-link="https://www.youtube.com/@betaplay1">
            <div class="card-top">
                <img src="img/youtube.png" alt="YouTube">
            </div>

            <div class="card-content">
                <strong>Canal Betaplay</strong>
                <p>Live de todos os dias</p>
                <p>De segunda a sexta Rocket League</p>
                <p>Sábados de campeonatos RL</p>
                <p>Domingo com Live Aleatória</p>
            </div>
        </div>

        <!-- Discord -->
        <div class="card" data-link="https://discord.gg/qKUM8kFK">
            <div class="card-top">
                <img src="img/discord.png" alt="Discord">
            </div>

            <div class="card-content">
                <strong>Canal Betaplay</strong>
                <p>Call de qualidade</p>
            </div>
        </div>

        <!-- Imagem -->
        <div class="card image-card" data-link="https://seusite.com">
            <img src="img/thumb.png" alt="Imagem destaque">
        </div>

    </div>
  </section>

<!-- INICIAL -->

</body>
</html>