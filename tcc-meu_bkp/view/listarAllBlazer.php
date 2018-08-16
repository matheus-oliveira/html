<!DOCTYPE html>
<?php require_once '../dao/blazerDAO.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <style>
            body{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
            $blazerDAO = new BlazerDAO();
            $blazers = $blazerDAO->getAllBlazer();
            echo "<table class=' col-md-5 table table-bordered'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th>Protocolo</th>";
            echo "      <th>Produto</th>";
            // echo "      <th>Endereço</th>";
            echo "      <th>Alterar</th>";
            echo "      <th>Excluir</th>";
            echo "  </tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($blazers as $blazer) {
                echo "  <tr>";
                echo "      <td>1712{$blazer["id"]}</td>";
                echo "      <td>{$blazer["produto"]}</td>";
                echo "      <td align='center'><a href='alterarBlazer.php?id={$blazer["id"]}'><i class='glyphicon glyphicon-pencil'></i></a></td>";
                echo "      <td align='center'><a href='../controller/excluirBlazerController.php?id={$blazer["id"]}' onClick='return excluir();'><i class='glyphicon glyphicon-trash	Try it'></i></a></td>";
                echo "  </tr>";
            }
            echo "</tbody>";
            echo "</table>"
            ?>
        </div>
        <script>
            function excluir() {
                var confirmacao = confirm("Deseja excluir?");
                if (confirmacao) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </body>
</html>
