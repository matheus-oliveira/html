<!DOCTYPE html>
<html>
    <head>
      <title>Listar produtos</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="sortcut icon" href="../images/pink-306516_960_720.jpg" width=""  type="image/jpg" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/style.min.css" rel="stylesheet"/>
      <link href="css/estilos.css" rel="stylesheet" />
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="./js/jquery.maskedinput.min.js" type="text/javascript"></script>
      <script src="./js/jquery.validate.min.js" type="text/javascript"></script>
        <style>
            body{
                padding: 10px;
            }
        </style>

    </head>
    <body>
      <?php require_once '../dao/produtoDAO.php'; ?>
        <div class="container">
            <?php
            $produtoDAO = new ProdutoDAO();
            $produtos = $produtoDAO->getAllProduto();
            echo "<table class=' col-md-5 table table-bordered'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th>Nome</th>";
            echo "      <th>Quantidade</th>";
            echo "      <th>Fabricante</th>";
            echo "      <th>Data De Cadastro</th>";
            echo "      <th>Preco</th>";
            // echo "      <th>Endereço</th>";
            echo "      <th>Alterar</th>";
            echo "      <th>Excluir</th>";
            echo "  </tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($produtos as $produto) {
                echo "  <tr>";
                echo "      <td>{$produto["nome"]}</td>";
                echo "      <td>{$produto["quantidade"]}</td>";
                echo "      <td>{$produto["fabricante"]}</td>";
                echo "      <td>{$produto["dataCadastro"]}</td>";
                echo "      <td>{$produto["preco"]}</td>";
                echo "      <td align='center'><a href='alterarProduto.php?id={$produto["id"]}'><i class='glyphicon glyphicon-pencil'></i></a></td>";
                echo "      <td align='center'><a href='../controller/excluirProdutoController.php?id={$produto["id"]}' onClick='return excluir();'><i class='glyphicon glyphicon-trash	Try it'></i></a></td>";
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
