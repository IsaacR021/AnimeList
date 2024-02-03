<?php
    
    session_start();
    
    $serverName = "mysqlhtml.mysql.database.azure.com";
    $databaseName = "usuarios";
    $username1 = "grupohtml";
    $password = "Nota@100";
    $port = 3306;
    
    $username = $_SESSION["username"];
    $img = array();
    $nome = array();
    $nota = array();
    $progresso = array();
    $situacao = array();
    $aux = 0;

    $conn = new \mysqli($serverName, $username1, $password, $databaseName);
    
    $sql = "SELECT * FROM $username;";
    $res = $conn->prepare($sql);
    $res->execute();
    $res->store_result();
    $res->bind_result($imgAUX,$nomeAUX,$notaAUX,$progressoAUX,$situacaoAUX);

    while(mysqli_stmt_fetch($res)){
        $img[$aux] = $imgAUX;
        $nome[$aux] = $nomeAUX;
        $nota[$aux] = $notaAUX;
        $progresso[$aux] = $progressoAUX;
        $situacao[$aux] = $situacaoAUX;
        $aux++;
    }
    
    $animes =[
        $img,
        $nome,
        $nota,
        $progresso,
        $situacao 
    ];

    echo json_encode($animes);
    
    $conn->close();    

?>