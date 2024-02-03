function editBio(){
    let bio = document.getElementById("biografia");
    bio = bio.textContent;
    console.log({bio});
    
    request = $.post('biografia.php', {biografia: bio})

    request.done(function (response, textStatus, jqXHR){
        console.log("vitoria royale!  ");
        
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "deu ruim "+
            textStatus, errorThrown
        );
    });
}

function abrirBio(){
    let modal = document.querySelector(".modalBio");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    console.log(bolaVerde);
    modal.style.display = "block"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: none;');
}

function fecharBio(){
    let modal = document.querySelector(".modalBio");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    modal.style.display = "none"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: block;');

}

function abrirImg(){
    let modal = document.querySelector(".modalImg");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    console.log(bolaVerde);
    modal.style.display = "block"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: none;');
}

function fecharImg(){
    let modal = document.querySelector(".modalImg");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    modal.style.display = "none"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: block;');

}

function abrirFavchar(){
    let modal = document.querySelector(".modalFavchar");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    console.log(bolaVerde);
    modal.style.display = "block"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: none;');
}

function fecharFavchar(){
    let modal = document.querySelector(".modalfavchar");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    modal.style.display = "none"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: block;');

}

function abrirFav(){
    let modal = document.querySelector(".modalFav");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    console.log(bolaVerde);
    modal.style.display = "block"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: none;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: none;');
}

function fecharFav(){
    let modal = document.querySelector(".modalfav");
    let bolaVerde = document.querySelector(".bolaStatusVerde::before")
    modal.style.display = "none"; 
    document.styleSheets[0].addRule('.bolaStatusVerde::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAzul::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusVermelho::before', 'display: block;');
    document.styleSheets[0].addRule('.bolaStatusAmarelo::before', 'display: block;');

}