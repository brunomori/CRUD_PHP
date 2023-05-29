<!DOCTYPE html>
<html>

<head>
    <title>Listar Usuários</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .alert {
            background-color: #f44336;
            color: white;
            padding: 8px;
        }

        .row22 {
            margin: 22px;
        }
    </style>
</head>

<body>
    <?php
    include("index.php");
    include("config.php");

    function listarUsuarios($conn)
    {
        $sql = "SELECT * FROM usuarios";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            echo "<div class='row22'>";
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Email</th>";
            echo "<th>Data de Nascimento</th>";
            echo "<th>Deletar</th>";
            echo "</tr>";
            echo"<div>";

            while ($row = $res->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $row->id . "</td>";
                echo "<td>" . $row->nome . "</td>";
                echo "<td>" . $row->email . "</td>";
                echo "<td>" . $row->data_nasc . "</td>";
                echo "<td>
                        <form method='POST' onsubmit='return confirm(\"Tem certeza que deseja deletar este usuário?\")'>
                            <input type='hidden' name='delete' value='" . $row->id . "'>
                            <button type='submit'>Deletar</button>
                        </form>
                      </td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p class='alert'>Não encontrado</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["delete"])) {
            $id = $_POST["delete"];
            $sql = "DELETE FROM usuarios WHERE id = $id";
            if ($conn->query($sql)) {
                echo "<p class='alert'>Usuário deletado com sucesso</p>";
            } else {
                echo "<p class='alert'>Erro ao deletar usuário: " . $conn->error . "</p>";
            }
        }
    }

   
    listarUsuarios($conn);
    ?>
</body>

</html>