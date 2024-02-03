<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location: ./../login/login.html");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ANIME-SE / Sobre nós</title>
        <link rel="stylesheet" href="sobrenos.css">
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
        <main>
            <div class="container">
                 <div id="sobre">
                     <h2>Sobre nós</h2>
                 </div>
                 <div id="fileira1" class="fileira">
                     <div class="pessoa">
                         <img class="image" src="./pictures/sesshomaru.jpg" alt="foto">
                         <p id="nome">Lucas</p>
                         <p id="desc">
                             Lorem ipsum dolor sit.
                         </p>
                     </div>
                     <div class="pessoa">
                         <img class="image" src="./pictures/Nowa.png" alt="foto">
                         <p id="nome">Gabi</p>
                         <p id="desc">
                             A tímida extrovertida e acumuladora de bichos de rpg.
                         </p>
                     </div>
                 </div>
                 <div id="fileira2" class="fileira">
                     <div class="pessoa">
                         <img class="image" src="./pictures/nandin.JPG" alt="foto">
                         <p id="nome">Fernando</p>
                         <p id="desc">
                            Apenas escrevendo uns codigos e aprendendo Front-end
                         </p>
                     </div>
                     <div class="pessoa">
                         <img class="image" src="isaac.png" alt="foto">
                         <p id="nome">Isaac</p>
                         <p id="desc">
                            Apaixonado por tecnologia e inovação.
                        </p>
                    </div>
                </div>
                <div id="fileira3" class="fileiraespecial">
                    <div class="pessoa">
                        <img class="image" src="./pictures/sesshomaru.jpg" alt="foto">
                        <p id="nome">Matheus</p>
                        <p id="desc">
                            Lorem ipsum dolor sit, amet consectetur adipisicing .
                            Perferendis eveniet ducimus suscipit dolorem veniam rem, eaque doloremque quidem ab tempora
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
</html>
