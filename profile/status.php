<?php
    
    session_start();
    
    $serverName = "mysqlhtml.mysql.database.azure.com";
    $databaseName = "usuarios";
    $username1 = "grupohtml";
    $password = "Nota@100";
    $port = 3306;
    
    $username = $_SESSION["username"];
    $status = array();
    $aux = 0;

    $conn = new \mysqli($serverName, $username1, $password, $databaseName);
    
    $sql = "SELECT situacao FROM $username;";
    $res = $conn->prepare($sql);
    $res->execute();
    $res->store_result();
    $res->bind_result($statusAUX);

    while(mysqli_stmt_fetch($res)){
        $status[$aux] = $statusAUX;
        $aux++;
    }
    
    echo json_encode($status);
    
    $conn->close();    

?>