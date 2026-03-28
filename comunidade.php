<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comunidade</title>
    <link rel="icon" href="img/user.png" type="image/png">
    <link rel="stylesheet" href="css/comunidade.css">
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/embreve.css">
</head>
<body>

<!-- NAVBAR -->
  <?php include 'itens/navbar.php'; ?>

<section class="comandos">
    <h3>COMANDOS DO CHAT YOUTUBE</h3>

<!-- CARD -->
    <div class="comando-card">

<!-- MOEDAS -->
        <div class="comando-header">
            <div class="left">
                <img src="img/moeda.png">
                <div>
                    <strong>Moedas</strong>
                    <p class="cmd">!moedas</p>
                </div>
            </div>

            <button class="copy-btn" data-copy="!moedas">📋</button>
        </div>
        <div class="comando-body">
            <p>Com esse comando você verifica quantas moedas você tem</p>
        </div>

    </div>

<!-- MINERAR -->
    <div class="comando-card">

        <div class="comando-header">
            <div class="left">
                <img src="img/minerar.png">
                <div>
                    <strong>Minerar</strong>
                    <p class="cmd">!minerar</p>
                </div>
            </div>

            <button class="copy-btn" data-copy="!minerar">📋</button>
        </div>

        <div class="comando-body">
            <p>Com esse comando você se teleporta para uma mina e coleta minérios.</p>

            <div class="sub">
                <strong>Comandos Associados</strong>

                <div class="comando-header">
                    <div class="left">
                        <img src="img/mochila.png">
                        <div>
                            <strong>Inventario</strong>
                            <p class="cmd">!inventario</p>
                            <p>Mostra seus itens</p>
                        </div>
                    </div>

                <button class="copy-btn" data-copy="!inventario">📋</button>
                </div>

                <div class="comando-header">
                    <div class="left">
                        <img src="img/carrinho.png">
                        <div>
                            <strong>Vender</strong>
                            <p class="cmd">!vender</p>
                            <p>Vende tudo</p>
                        </div>
                    </div>

                <button class="copy-btn" data-copy="!vender">📋</button>
                </div>

            </div>
        </div>

    </div>

<!-- NIVEL -->
    <div class="comando-card">
        <div class="comando-header">
            <div class="left">
                <img src="img/nivel.png">
                <div>
                    <strong>Nível</strong>
                    <p class="cmd">!nivel</p>
                </div>
            </div>

            <button class="copy-btn" data-copy="!nivel">📋</button>
        </div>
        <div class="comando-body">
            <p>Esse comando mostra seu nível</p>
        </div>
    </div>

<!-- ROLETA -->
    <div class="comando-card">
        <div class="comando-header">
            <div class="left">
                <img src="img/roleta.png">
                <div>
                    <strong>Roleta</strong>
                    <p class="cmd">!roleta</p>
                </div>
            </div>

            <button class="copy-btn" data-copy="!roleta">📋</button>
        </div>
        <div class="comando-body">
            <p>Com esse comando você pode girar uma roleta invisivel para tentar ganhar moedas.</p>
        </div>
    </div>

<!-- RANK -->
    <div class="comando-card">

        <div class="comando-header">
            <div class="left">
                <img src="img/rank.png">
                <div>
                    <strong>Rank</strong>
                    <p class="cmd">!registrar</p>
                </div>
            </div>

            <button class="copy-btn" data-copy="!registrar">📋</button>
        </div>

        <div class="comando-body">
            <p>Você so aparecerá no Rank se usar esse comando.</p>

            <div class="sub">
                <strong>Comandos Associados</strong>

                <div class="comando-header">
                    <div class="left">
                        <img src="img/moeda.png">
                        <div>
                            <strong>Top Moedas</strong>
                            <p class="cmd">!topmoedas</p>
                            <p>Verifique quem esta no Rank e em qual posição cada um está de acordo com sua riqueza.</p>
                        </div>
                    </div>

                <button class="copy-btn" data-copy="!topmoedas">📋</button>
                </div>
            </div>
        </div>
    </div>

<!-- DOAR -->
    <div class="comando-card">
        <div class="comando-header">
            <div class="left">
                <img src="img/presente.png">
                <div>
                    <strong>Doar</strong>
                    <p class="cmd">!tome</p>
                </div>
            </div>

            <button class="copy-btn" data-copy="!tome">📋</button>
        </div>
        <div class="comando-body">
            <p>Doe moedas para seus amigos usando esse comando.</p>
        </div>
    </div>


</section>

<script src="acao/comunidade.js"></script>
</body>
</html>