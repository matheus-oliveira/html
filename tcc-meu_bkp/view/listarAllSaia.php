<!DOCTYPE html>
<?php require_once '../dao/saiaDAO.php'; ?>
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
            $saiaDAO = new SaiaDAO();
            $saias = $saiaDAO->getAllSaia();
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
            foreach ($saias as $saia) {
                echo "  <tr>";
                echo "      <td>1712{$saia["id"]}</td>";
                echo "      <td>{$saia["produto"]}</td>";
                echo "      <td align='center'><a href='alterarSaia.php?id={$saia["id"]}'><i class='glyphicon glyphicon-pencil'></i></a></td>";
                echo "      <td align='center'><a href='../controller/excluirSaiaController.php?id={$saia["id"]}' onClick='return excluir();'><i class='glyphicon glyphicon-trash	Try it'></i></a></td>";
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
