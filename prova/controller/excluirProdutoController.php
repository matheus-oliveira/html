<?php

require_once '../dao/produtoDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];

$produtoDAO = new ProdutoDAO();
$produtoDAO->excluirProdutoById($id);

echo "<script>";
echo "    window.location.href = '../view/listarAllProduto.php';";
echo "</script>";
?>
