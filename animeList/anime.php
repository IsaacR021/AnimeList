<?php
include("lista.html");
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

$username = $_SESSION["username"];
$img = $_POST["img"];
$nome = $_POST["nome"];
$nota = $_POST["nota"];
$progresso = $_POST["progresso"];
$situacao = $_POST["situacao"];

echo 'user -> '. var_dump($username);
echo 'img -> '. var_dump($img);
echo 'nome -> '. var_dump($nome);
echo 'nota -> '. var_dump($nota);
echo 'progresso -> '. var_dump($progresso);
echo 'situ -> '. var_dump($situacao);



$adc_anime = "INSERT INTO $username (img,nome,nota,progresso,situacao) VALUES (?,?,?,?,?);";
$paran = $conn->prepare($adc_anime);
$paran->bind_param("ssdss",$img,$nome,$nota,$progresso,$situacao);

if($paran->execute()){
    echo ' VITORIA ROYALE';
}

else{
    echo $conn->error;
}



$conn->close();
?>
