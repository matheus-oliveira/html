<table border="1" width="100%">
    <?php
    switch ($_SESSION["perfil"]) {
        case 'Administrador':
            echo "<tr>";
            echo "    <td><a href='formCadastroCliente.php' target='centro'>Cadastrar</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "    <td><a href='listaAllCliente.php' target='centro'>Listar</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "    <td><a href='../controller/sairController.php'>Sair</a></td>";
            echo "</tr>";
          break;
        case 'Usuário':
            echo "<tr>";
            echo "    <td><a href='formCadastroCliente.php' target='centro'>Cadastrar</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "    <td><a href='../controller/sairController.php'>Sair</a></td>";
            echo "</tr>";
          break;
    }
    ?>
</table>