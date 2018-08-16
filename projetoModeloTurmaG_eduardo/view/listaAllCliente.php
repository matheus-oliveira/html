<!DOCTYPE html>
<?php require_once '../dao/ClienteDAO.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../lib/font-awesome-4.7.0/css/font-awesome.min.css"/>
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
            $clienteDAO = new ClienteDAO();
            $clientes = $clienteDAO->getAllCliente();
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th>Nome</th>";
            echo "      <th>Rg</th>";
            echo "      <th>Cpf</th>";
            echo "      <th>Data de Nascimento</th>";
            echo "      <th>Endereço</th>";
            echo "      <th>Estado</th>";
            echo "      <th>Cidade</th>";
            echo "      <th>Excluir</th>";
            echo "      <th>Alterar</th>";
            echo "  </tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($clientes as $cliente) {
                echo "  <tr>";
                echo "      <td>{$cliente["nome"]}</td>";
                echo "      <td>", $cliente["rg"], "</td>";
                echo "      <td>{$cliente["cpf"]}</td>";
                echo "      <td>{$cliente["datanascimento"]}</td>";
                echo "      <td>{$cliente["endereco"]}</td>";
                echo "      <td>{$cliente["estado"]}</td>";
                echo "      <td>{$cliente["cidade"]}</td>";
                echo "      <td align='center'><a href='../controller/excluirClienteController.php?id={$cliente["id"]}' onClick='return excluir();'><i class='fa fa-ban'></i></a></td>";
                echo "      <td align='center'><a href='alterarCliente.php?id={$cliente["id"]}'><i class='fa fa-pencil-square-o'></i></a></td>";
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
