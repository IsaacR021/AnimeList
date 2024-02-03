<?php
include("login.html");
$username = $_POST['username'];
$senha = $_POST['senha'];

$serverName = "mysqlhtml.mysql.database.azure.com";
$databaseName = "usuarios";
$username1 = "grupohtml";
$password = "Nota@100";
$port = 3306;

$conn = new mysqli($serverName, $username1, $password, $databaseName);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$verificar_login = "SELECT username FROM usuarios WHERE username = ? and senha = ?";
$paran = $conn->prepare($verificar_login);
$paran->bind_param("ss", $username,$senha);
$paran->execute();
$paran->store_result();



if ($paran->num_rows <=0) {
   
    
    
    include("infologin.php");

}

else {
    
    include("infologin-prov.php");

    if(!(isset($_SESSION))){
        session_start();
    }
    
    $_SESSION["username"] = $username;
    header("location: ../profile/profile.php");
}


$conn->close();
?>
