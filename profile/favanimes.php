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

$fav1 = $_POST["fav1"];
$fav2 = $_POST["fav2"];
$fav3 = $_POST["fav3"];
$fav4 = $_POST["fav4"];
$fav5 = $_POST["fav5"];
$fav6 = $_POST["fav6"];
$fav7 = $_POST["fav7"];
$fav8 = $_POST["fav8"];

$username = $_SESSION["username"];

$sqlFav = "UPDATE usuarios SET fav1 = ? , fav2 = ? , fav3 = ? , fav4 = ? , fav5 = ? , fav6 = ? , fav7 = ? , fav8 = ? WHERE username= ?;";
$paran = $conn->prepare($sqlFav);
$paran->bind_param("sssssssss", $fav1,$fav2,$fav3,$fav4,$fav5,$fav6,$fav7,$fav8,$username);

if($paran->execute()){
}

else{
    echo $conn->error;
}



$conn->close();
?>
