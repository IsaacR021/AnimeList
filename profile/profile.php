<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if (!isset($_SESSION["username"])){
    header("location: ./../login/login.html");
    }

    $serverName = "mysqlhtml.mysql.database.azure.com";
    $databaseName = "usuarios";
    $username1 = "grupohtml";
    $password = "Nota@100";
    $port = 3306;

    #biografia
    $conn = new mysqli($serverName, $username1, $password, $databaseName);
    $sqlBio = "SELECT biografia FROM usuarios WHERE username = ?;";
    $res = $conn->prepare($sqlBio);
    $res->bind_param("s", $_SESSION["username"]);
    $res->execute();
    $res->store_result();
    $res->bind_result($biografia);
    $res = mysqli_stmt_fetch($res);

    #pfp
    $sqlPfp = "SELECT pfp FROM usuarios WHERE username = ?;";
    $res2 = $conn->prepare($sqlPfp);
    $res2->bind_param("s", $_SESSION["username"]);
    $res2->execute();
    $res2->store_result();
    $res2->bind_result($pfp);
    $res2 = mysqli_stmt_fetch($res2);    

    #favchar
    $sqlFavchar = "SELECT perso1 , perso2 FROM usuarios WHERE username = ?;";
    $res3 = $conn->prepare($sqlFavchar);
    $res3->bind_param("s", $_SESSION["username"]);
    $res3->execute();
    $res3->store_result();
    $res3->bind_result($favchar1,$favchar2);
    $res3 = mysqli_stmt_fetch($res3); 

    #favanime
    $sqlFav = "SELECT fav1,fav2,fav3,fav4,fav5,fav6,fav7,fav8 FROM usuarios WHERE username = ?;";
    $res4 = $conn->prepare($sqlFav);
    $res4->bind_param("s", $_SESSION["username"]);
    $res4->execute();
    $res4->store_result();
    $res4->bind_result($fav1,$fav2,$fav3,$fav4,$fav5,$fav6,$fav7,$fav8);
    $res4 = mysqli_stmt_fetch($res4); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANIME-SE / Perfil</title>
        <link rel="stylesheet" href="profile.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
        <img id="logo" src="./logo.png">
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
    <div class="all">
        <main>
            <div class="container">
                <div class="container-left">
                    <div class="identidade">
                        <div class="pfp">
                            <img src="<?php echo $pfp?>">
                        </div>
                        <strong id="username"><?php echo $_SESSION["username"]?></strong>
                    </div>
                    <div id="butaoimg">
                        <button id="btnImg" onclick="abrirImg()">editar</button>
                    </div>
                    <div class = "modalImg">
                        <button id="fechar" onclick="fecharImg()">fechar</button>
                        <form action="pfp.php" method="post" onsubmit="setTimeout(function(){window.location.reload();},32);">
                          <p><label for="pfpid">Link para sua Foto de Perfil:</label></p>
                          <textarea id="pfpid" name="pfp" rows="10" cols="50">link</textarea>
                          <br>
                          <input id="salvar" type="submit" value="salvar">
                        </form>
                    </div>
                    <div class="personagens">
                        <b>Personagens Favoritos</b>
                        <div class="imagens">
                            <img id ="favchar1" src="<?php echo $favchar1?>">
                            <img id="favchar2" src="<?php echo $favchar2?>">
                        </div>
                        <div id="butaoFavchar">
                        <button id="btnFavchar" onclick="abrirFavchar()">editar</button>
                    </div>
                    <div class = "modalFavchar">
                        <button id="fechar" onclick="fecharFavchar()">fechar</button>
                        <form action="favchar.php" method="post" onsubmit="setTimeout(function(){window.location.reload();},32);">
                          <p><label for="favcharid">Link para seus personagens favoritos:</label></p>
                          <textarea id="favcharid" name="favchar1" rows="5" cols="50">link 1</textarea>
                          <br>
                          <textarea id="favcharid2" name="favchar2" rows="5" cols="50">link 2</textarea>
                          <br>
                          <input id="salvar" type="submit" value="salvar">
                        </form>
                    </div>
                    </div>
                </div>
                <div class="container-right">
                    <div class="minibox">
                        <b>Biografia</b>
                        <p id="biografia"><?php echo $biografia?></p>
                        <div id="butaobio">
                            <button id="btnBio" onclick="abrirBio()">editar</button>
                        </div>
                    </div>
                    <div class = "modalBio">
                        <button id="fechar" onclick="fecharBio()">fechar</button>
                        <form action="biografia.php" method="post" onsubmit="setTimeout(function(){window.location.reload();},32);">
                          <p><label for="bioid">Escreva sobre voce:</label></p>
                          <textarea id="bioid" name="biografia" rows="10" cols="50">biografia</textarea>
                          <br>
                          <input id="salvar" type="submit" value="salvar">
                        </form>
                    </div>
                    <div class="minibox">
                        <b>Status</b>
                        <div class="status">
                            <div class="report1">
                                <p class="bolaStatusVerde">Assistindo</p>
                                <p>16</p>
                                <p class="bolaStatusVermelho">Dropado</p>
                                <p>25</p>
                            </div>
                            <div class="report2">
                                <p class="bolaStatusAzul">Completado</p>
                                <p>10</p>
                                <p class="bolaStatusAmarelo">Planejado</p>
                                <p>10</p>
                            </div>
                            <div class="info">
                                <div id="estatistica">
                                    <div id="Assistindo" style="background-color: #2db039; border-radius: 7px 0px 0px 7px"></div>
                                    <div id="Dropado" style="background-color: #a12f31;"></div>
                                    <div id="Completado" style="background-color: #26448f;"></div>
                                    <div id="Planejado" style="background-color: #e7b715; border-radius: 0px 7px 7px 0px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="minibox">
                        <div class="grafico-barra">
                            <div class="area-barras">
                                <div class="divisao">
                                    <div id="barra1" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra2" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra3" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra4" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra5" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra6" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra7" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra8" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra9" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra10" class="barra">
                                        <div class="quantidade"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="legenda">
                                <div class="notas">1</div>
                                <div class="notas">2</div>
                                <div class="notas">3</div>
                                <div class="notas">4</div>
                                <div class="notas">5</div>
                                <div class="notas">6</div>
                                <div class="notas">7</div>
                                <div class="notas">8</div>
                                <div class="notas">9</div>
                                <div class="notas">10</div>
                            </div>
                        </div>
                    </div>
                    <div class="minibox">
                        <b>Animes Favoritos</b>
                        <div class="animesfavoritos">
                            <img class="posters" src="<?php echo $fav1?>">
                            <img class="posters" src="<?php echo $fav2?>">
                            <img class="posters" src="<?php echo $fav3?>">
                            <img class="posters" src="<?php echo $fav4?>">
                            <img class="posters" src="<?php echo $fav5?>">
                            <img class="posters" src="<?php echo $fav6?>">
                            <img class="posters" src="<?php echo $fav7?>">
                            <img class="posters" src="<?php echo $fav8?>">
                        </div>
                        <div id="butaofav">
                            <button id="btnFav" onclick="abrirFav()">editar</button>
                        </div>
                    </div>
                    <div class = "modalFav">
                        <button id="fechar" onclick="fecharFav()">fechar</button>
                        <form action="favanimes.php" method="post" onsubmit="setTimeout(function(){window.location.reload();},32);">
                          <p><label for="favcharanimeid">Link para seus animes favoritos:</label></p>
                          <textarea id="favcharanimeid" name="fav1" rows="2" cols="50">link</textarea>
                          <br>
                          <textarea id="favcharanimeid2" name="fav2" rows="2" cols="50">link</textarea>
                          <br>
                          <textarea id="favcharanimeid3" name="fav3" rows="2" cols="50">link</textarea>
                          <br>
                          <textarea id="favcharanimeid4" name="fav4" rows="2" cols="50">link</textarea>
                          <br>
                          <textarea id="favcharanimeid5" name="fav5" rows="2" cols="50">link</textarea>
                          <br>
                          <textarea id="favcharanimeid6" name="fav6" rows="2" cols="50">link</textarea>
                          <br>
                          <textarea id="favcharanimeid7" name="fav7" rows="2" cols="50">link</textarea>
                          <br>
                          <textarea id="favcharanimeid8" name="fav8" rows="2" cols="50">link</textarea>
                          <br>
                          <input id="salvar" type="submit" value="salvar">
                        </form>
                    </div>
                </div>
                
            </div>   
        </main>
        <footer>
            <div class="footer_content">
                <div id="left" class="content">
                    <p>Acompanhe o pessoal da ANIME-SE!</p>
                        <a href="#" class="footer-link" id="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="footer-link" id="Twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="footer-link" id="Linkedin">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class="footer-link" id="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                </div>    
                <div id="center" class="content">
                    <ul>
                    <li><a href="./../profile/profile.php">Perfil</a></li>
                        <li><a href="./../animeList/lista.php">Animes</a></li>
                        <li><a href="./../forum/forum.php">Fórum</a></li>
                        <li><a href="./../sobrenos/sobrenos.php">Sobre</a></li>
                        <li><a href="./../lista/lista.php">Lista</a></li>
                        <li><a href="./../sair/sair.php">Sair</a></li>
                    </ul> 
                </div>
                <div id="right" class=" content=">
                    <h3>© 2023 all rights reserved ANIME-SE</h3>
                </div>
        </div>
        </footer>
        <script src="profile-status-graph.js"></script>
        <script src="profile-score-graph.js"></script>

        <script src="edit-bio.js"></script>
    </body>
    <?php
        $conn->close();
    ?>
</html>

