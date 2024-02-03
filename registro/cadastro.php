<?php
include("registro.html");





$serverName = "mysqlhtml.mysql.database.azure.com";
$databaseName = "usuarios";
$username1 = "grupohtml";
$password = "Nota@100";
$port = 3306;


$conn = new mysqli($serverName, $username1, $password, $databaseName);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$email = $_POST['email'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$data_aniversario = $_POST['data_aniversario'];



$verificar_user = "SELECT username FROM usuarios WHERE username = ?";
$paran = $conn->prepare($verificar_user);
$paran->bind_param("s", $username);
$paran->execute();
$paran->store_result();

$verificar_email = "SELECT email FROM usuarios WHERE email = ?";
$pass = $conn->prepare($verificar_email);
$pass->bind_param("s", $email);
$pass->execute();
$pass->store_result();




if ($paran->num_rows > 0) {
   
    
    include("username_existente.php");
    
}

elseif($pass->num_rows > 0){
    
    include("email_existente.php");

}

else {
    
    $sql = "INSERT INTO usuarios (email, username, senha, date_birth) VALUES (?, ?, ?, ?)";
    $pass = $conn->prepare($sql);
    $pass->bind_param("ssss", $email, $username, $senha, $data_aniversario);

    if ($pass->execute()){
        echo "Cadastro realizado com sucesso!";

        $sql2 = "CREATE TABLE $username (
            img varchar(1000),
            nome varchar(200),
            nota int,
            progresso varchar(200),
            situacao varchar(200)
            );";
        $conn->query($sql2);

        header("location: ../login/login.html ");
    }
    else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}


$conn->close();
?>
