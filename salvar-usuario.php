<?php
include("config.php");
include("index.php");
//SERVER É UMA VARIAVEL GLOBAL COM VARIAS INFOS! 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data_nasc = $_POST["data_nasc"];

    $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('$nome', '$email', '$senha', '$data_nasc')";
    $res = $conn->query($sql);
    //excuta o comando sql

    if ($res) {
        echo '<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Erro ao cadastrar o usuário: ' . $conn->error . '</div>';
    }
}
?>
