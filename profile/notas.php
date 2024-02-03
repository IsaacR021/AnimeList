<?php
    
    session_start();
    
    $serverName = "mysqlhtml.mysql.database.azure.com";
    $databaseName = "usuarios";
    $username1 = "grupohtml";
    $password = "Nota@100";
    $port = 3306;
    
    $username = $_SESSION["username"];
    $notas = array();
    $aux = 0;

    $conn = new \mysqli($serverName, $username1, $password, $databaseName);
    
    $sql = "SELECT nota FROM $username;";
    $res = $conn->prepare($sql);
    $res->execute();
    $res->store_result();
    $res->bind_result($notaAUX);

    while(mysqli_stmt_fetch($res)){
        $nota[$aux] = $notaAUX;
        $aux++;
    }
    
    echo json_encode($nota);
    
    $conn->close();    

?>