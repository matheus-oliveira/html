<!DOCTYPE html>
<?php require_once '../dao/usuarioDAO.php'; ?>
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
            $usuarioDAO = new UsuarioDAO();
            $usuarios = $usuarioDAO->getAllUsuario();
            $enderecos = $usuarioDAO->getAllTelefone();
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th>Nome</th>";
            // echo "      <th>Rg</th>";
            echo "      <th>Cpf</th>";
            echo "      <th>Data de Nascimento</th>";
            echo "      <th>Sexo</th>";
            echo "      <th>E-mail</th>";
            // echo "      <th>Endereço</th>";
            echo "      <th>Excluir</th>";
            echo "      <th>Alterar</th>";
            echo "  </tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($usuarios as $usuario) {
                echo "  <tr>";
                echo "      <td>{$usuario["nome"]}</td>";
                echo "      <td>{$usuario["cpf"]}</td>";
                echo "      <td>{$usuario["dataNasc"]}</td>";
                echo "      <td>{$usuario["sexo"]}</td>";
                echo "      <td>{$usuario["email"]}</td>";
                echo "      <td align='center'><a href='../controller/excluirUsuarioController.php?id={$usuario["id"]}' onClick='return excluir();'><i class='glyphicon glyphicon-trash	Try it'></i></a></td>";
                echo "      <td align='center'><a href='alterarUsuario.php?id={$usuario["id"]}'><i class='glyphicon glyphicon-pencil'></i></a></td>";
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
