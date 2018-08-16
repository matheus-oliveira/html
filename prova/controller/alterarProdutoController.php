<?php

require_once '../dto/produtoDTO.php';
require_once '../dao/produtoDAO.php';

//recuperar o formulario

$nome = $_POST ["nome"];
$quantidade = $_POST ["quantidade"];
$fabricante = $_POST ["fabricante"];
$dataCadastro = $_POST ["dataCadastro"];
$preco = $_POST ["preco"];
$id = $_POST ["id"];



$produtoDTO = new ProdutoDTO();

$produtoDTO->setNome($nome);
$produtoDTO->setQuantidade($quantidade);
$produtoDTO->setFabricante($fabricante);
$produtoDTO->setDataCadastro($dataCadastro);
$produtoDTO->setPreco($preco);
$produtoDTO->setId($id);

$produtoDAO = new ProdutoDAO();
$retorno = $produtoDAO->alterarProduto($produtoDTO);

if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listarAllProduto.php';";
    echo "</script>";
}
?>
