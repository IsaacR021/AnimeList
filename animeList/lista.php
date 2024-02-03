<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location: ./../login/login.html");
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Anime-se/Lista</title>

    <link rel="stylesheet" href="lista.css"/>
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
    <h1 id = "List">Anime-se</h1>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Digite sua pesquisa">
    </div>

    <div class = "modal">
      <button id="fechar" onclick="fecharBio()">fechar</button>
      <form action="anime.php" method="post" onsubmit="setTimeout(function(){window.location.reload();},15);">
        <p><label id="personalize" >Personalize:</label></p>
        <p><label >nome:</label></p>
        <textarea name="nome" rows="1" cols="20"></textarea><br>
        <p><label >link da imagem:</label></p>
        <textarea name="img" rows="1" cols="20"></textarea><br>
        <p><label >nota:</label></p>
        <textarea name="nota" rows="1" cols="20"></textarea><br>
        <p><label >progresso x/y:</label></p>
        <textarea name="progresso" rows="1" cols="20"></textarea><br>
        <input type="submit" name="situacao" value="completado"/>
        <input type="submit" name="situacao" value="assistindo"/>
        <input type="submit" name="situacao" value="dropado"/>
        <input type="submit" name="situacao" value="planejado"/>
      </form>
    </div>

    <div id="searchResults"> </div>
    <div id="animeList"></div>


<div id='table-container'></div>

 
<script>
  CsvToHtmlTable.init({
    csv_path:'anime-data.csv',
    element: 'table-container', 
    allow_download: true,
    csv_options: {separator: ';', delimiter: '"'},
    datatables_options: {"paging": false}
  });
</script>
    </div>

    <script src="script.js"></script>
    <script src="modal.js"></script>

</body>
</html>