<nav class="navbar">

  <div class="logo-container">
    <img src="./img/user.png" alt="Logo BV">

    <div class="logo-text">
      <h1>BETAVERSO</h1>
      <span>|</span>
      <span>Universo Gamer</span>
    </div>
  </div>

  <div class="menu">
    <a href="./index.php">Inicio</a>
    <a href="./embreve.php">Mercado</a>
    <a href="./comunidade.php">Comunidade</a>
  </div>

  <div class="user-container">
    <button class="user-btn" onclick="irParaLogin()">
      <img src="./img/user.png" alt="Usuário">
    </button>
  </div>


  <script>
    function irParaLogin() {
      window.location.href = "embreve.php";
    }
  </script>
</nav>

