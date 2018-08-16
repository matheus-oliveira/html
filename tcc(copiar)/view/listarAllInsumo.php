<!DOCTYPE html>
<?php require_once '../dao/insumoDAO.php'; ?>
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
            $insumoDAO = new InsumoDAO();
            $insumos = $insumoDAO->getAllInsumo();
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th>Produto</th>";
            // echo "      <th>Rg</th>";
            echo "      <th>tipo</th>";
            echo "      <th>quantidade</th>";
            echo "      <th>Preço</th>";
            echo "      <th>Data da compra</th>";
            // echo "      <th>Endereço</th>";
            echo "      <th>Excluir</th>";
            echo "      <th>Alterar</th>";
            echo "  </tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($insumos as $insumo) {
                echo "  <tr>";
                echo "      <td>{$insumo["produto"]}</td>";
                echo "      <td>{$insumo["tipo"]}</td>";
                echo "      <td>{$insumo["quantidade"]}</td>";
                echo "      <td>{$insumo["preco"]}</td>";
                echo "      <td>{$insumo["dataCompra"]}</td>";
                echo "      <td align='center'><a href='../controller/excluirInsumoController.php?id={$insumo["id"]}' onClick='return excluir();'><i class='glyphicon glyphicon-trash	Try it'></i></a></td>";
                echo "      <td align='center'><a href='alterarInsumo.php?id={$insumo["id"]}'><i class='glyphicon glyphicon-pencil'></i></a></td>";
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
