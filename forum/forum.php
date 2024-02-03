<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location: ./../login/login.html");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ANIME-SE/ Forum</title>
        <link rel="stylesheet" href="forum.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
        <h1>Fórum</h1>
        <main>
            <div class ="container">

                <div class="container_upper">
                    <div id="article_1" class="article">  
                        <div class="imagens">
                            <a href="./../forum/Article1/sports.html"><img id="posters" src="pictures/kuroko.png">
                            
                            </a>
                        </div>
                        <div class="titulo">
                            <h2>Animes de Esporte</h2>
                        </div>        
                        <p>
                            Animes para te inspirar a fazer alguma atividade física!
                            Acompanhe com o pessoal da ANIME-SE!
                        </p>
                    </div>
                    <div id="article_2" class="article">
                        <div class="imagens">
                            <a href="./../forum/Article2/demon.html"><img id="posters" src="pictures/demon.png">
                            </a>
                        </div>
                        <div class="titulo">
                            <h2>Animes de demônio</h2>
                        </div>        
                        <p>Hoje, iremos mostrar para vocês animes com demônios
                            em que o personagem principal tem que enfrentar
                            diversos problemas na sua jornada. 
                            Acompanhe com o pessoal da ANIME-SE</p>
 
                    </div>

                    
                    <div id="article_3" class="article">
                        <div class="imagens">
                            <a href="./Article3/shounen.html"><img id="posters" src="pictures/hunter_x_hunter.jpg">
                            </a>
                        </div>
                        <div class="titulo">
                            <h2>Animes Shounen</h2>
                        </div>        
                        <p>Hoje teremos animes do estilo Shounen.
                            A administração A-M-A esse estilo de coração e
                            acha que é uma ótima recomendação para você que está 
                            começando a assistir! Acompanhe com o pessoal da ANIME-SE!
                        </p>
   
                    </div>


                </div>

                <div class="container_bottom">
                    <div id="article_4" class="article">
                        <div class="imagens">
                            <a href="./Article4/old_animes.html"><img id="posters" src="pictures/top10.jpg">
                                </a>
                        </div>
                        <div class="titulo">
                            <h2>Top 10 animes antigos</h2>
                        </div>        
                        <p>
                        Vamos para o sótão onde temos alguns animes
                        na gaveta sombria guardada a 7 chaves na qual nunca mostramos para ninguém...
                        Mas hoje iremos mostar com detalhes os melhores animes e filmes antigos
                        no qual você já deve ter ouvido falar! 
                        </p>
   
                    </div>
                    <div id="article_5" class="article">
                        <div class="imagens">
                            <a href="./Article5/sad.html"><img id="posters" src="pictures/animes-tristes.jpg">

                            </a>
                        </div>
                        <div class="titulo">
                            <h2>Animes Tristes</h2>
                        </div>        
                        <p>
                        Vamos apresentar hoje alguns animes e filmes tristes que vai fazer
                         com que você se emocione muito estiver vendo. 
                         Acompanhe com o pessoal da ANIME-SE!
                    </p>
   

                    </div>
                    <div id="article_6" class="article">
                        <div class="imagens">
                            <a href="./Article6/anime_movies.html"><img id="posters" src="pictures/melhores-filmes-de-anime-og.jpg">
                            </a>
                        </div>
                        <div class="titulo">
                            <h2>Filmes de animes</h2>
                        </div>        
                        <p>
                        Estamos acostumados a ver animes de 20 minutinhos...
                        Então vamos mostrar filmes para você poder aproveitar mais. 
                        Agora e com o pessoal da ANIME-SE!
                        </p>
   

                    </div>



                </div>

            </div>

        </main>
        <footer>
            <div class="footer_content">
                <div id="left" class="content" >
                    <p>Acompanhe o pessoal da ANIME-SE!</p>
                     
                
                </div>    
                <div id="center"class="content">
                    <ul>
                    <li><a href="./../profile/profile.php">Perfil</a></li>
                        <li><a href="./../animeList/lista.php">Animes</a></li>
                        <li><a href="./../forum/forum.php">Fórum</a></li>
                        <li><a href="./../sobrenos/sobrenos.php">Sobre</a></li>
                        <li><a href="./../lista/lista.php">Lista</a></li>
                        <li><a href="./../sair/sair.php">Sair</a></li>
                    </ul> 
                </div>
                <div id="right" class content>
                    <h3>&#169 2023 all rights reserved ANIME-SE</h3>
        
                </div>




            </div>
        </footer>    
    </body>

<html>