<?php
include("profile.php");
session_start();

$serverName = "mysqlhtml.mysql.database.azure.com";
$databaseName = "usuarios";
$username1 = "grupohtml";
$password = "Nota@100";
$port = 3306;

$conn = new \mysqli($serverName, $username1, $password, $databaseName);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$favchar1 = $_POST["favchar1"] ;
$favchar2 = $_POST["favchar2"] ;
$username = $_SESSION["username"];

$atualizar_bio = "UPDATE usuarios SET perso1 = ? , perso2 = ? WHERE username= ?;";
$paran = $conn->prepare($atualizar_bio);
$paran->bind_param("sss", $favchar1,$favchar2,$username);

if($paran->execute()){
}

else{
    echo $conn->error;
}



$conn->close();
?>
