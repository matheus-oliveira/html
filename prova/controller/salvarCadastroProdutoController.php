<?php

require_once "../dto/produtoDTO.php";
require_once "../dao/produtoDAO.php";

//recuperar o formulario

$nome = $_POST ["nome"];
$quantidade = $_POST ["quantidade"];
$fabricante = $_POST ["fabricante"];
$dataCadastro = $_POST ["dataCadastro"];
$preco = $_POST ["preco"];



$produtoDTO = new ProdutoDTO();


$produtoDTO->setNome($nome);
$produtoDTO->setQuantidade($quantidade);
$produtoDTO->setFabricante($fabricante);
$produtoDTO->setDataCadastro($dataCadastro);
$produtoDTO->setPreco($preco);




$produtoDAO = new ProdutoDAO();
$retorno = $produtoDAO->salvar($produtoDTO);

echo "<script>";
echo "    window.location.href = '../view/formCadastroProduto.php';";
echo "</script>";


if ($retorno) {
    $confirmacao = TRUE;
    echo "<script>";
    echo "    window.location.href = '../view/formCadastroProduto.php?conf={$confirmacao}';";
    echo "</script>";
}
?>
