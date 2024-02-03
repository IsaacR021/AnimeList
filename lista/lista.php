<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location: ./../login/login.html");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <title>ANIME-SE/Lista</title>
</head>

<body>
  <header>
  <img id="logo" src="./logo.png" width="150px"
            height="50px">
            <a href="./../profile/profile.php">Perfil</a>
            <a href="./../animeList/lista.php">Animes</a>
            <a href="./../forum/forum.php">Fórum</a>
            <a href="./../sobrenos/sobrenos.php">Sobre</a>
            <a href="./../lista/lista.php">Lista</a>
        
            <div class="div-navbar">
            
            <a href="./../login/login.html">Login</a>
            <a href="./../registro/registro.html">Registrar</a>
            <a href="./../sair/sair.php">Sair</a>
            
            </div>
  </header>
  <br>
  <h1>Lista do usuário</h1> <br>

  <main>
    <table class="Tabela-anime">
      <thead>
        <tr>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Nota</th>
          <th>Progresso</th>
          <th>Situação</th>
        </tr>
      </thead>
      <tbody id="Tabela-anime-body">
      </tbody>
    </table>
  </main>
  <script src="script.js"></script>
  
</body>

</html>
