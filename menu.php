<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 80px;
        }

        .container {
            max-width: 600px;
        }

        .menu-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .menu-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .menu-option {
            margin-bottom: 10px;
        }

        .menu-option a {
            display: block;
            padding: 10px;
            border-radius: 5px;
            background-color: #6c757d;
            color: #ffffff;
            text-decoration: none;
        }

        .menu-option a:hover {
            background-color: #495057;
        }
    </style>
    <title>Programa de Cadastro - Menu</title>
</head>

<body>
    <div class="container">
        <div class="menu-card">
            <h1 class="menu-title">Programa de Cadastro</h1>
            <div class="menu-option">
                <a href="novo-usuario.php">Novo Usuário</a>
            </div>
            <div class="menu-option">
                <a href="listar-usuario.php">Listar Usuários e Excluir</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
include("footer.php");
?>

