<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'crud';

$conn = new mysqli($host, $user, $pass, $dbname);
//verificar se a propiedade connect_erro que está dentro da conn tem alguma coisa e se tiver vai retronar algo
if ($conn->connect_error) {
    die('Erro na conexão: ' . $conn->connect_error);
}

else{
   echo "<script> console.log('conexão realizada com sucesso.')</script>";
}
?>

