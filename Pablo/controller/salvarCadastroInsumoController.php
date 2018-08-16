<?php

require_once "../dto/insumoDTO.php";
require_once "../dao/insumoDAO.php";

//recuperar o formulario

$produto = $_POST ["produto"];
$quantidade = $_POST ["quantidade"];
$preco = $_POST ["preco"];
$dataCompra = $_POST ["dataCompra"];
$tipo = $_POST ["tipo"];


$insumoDTO = new InsumoDTO();

$insumoDTO->setQuantidade($quantidade);
$insumoDTO->setPreco($preco);
$insumoDTO->setProduto($produto);
$insumoDTO->setDataCompra($dataCompra);
$insumoDTO->setTipo($tipo);


$insumoDAO = new InsumoDAO();
$retorno = $insumoDAO->salvar($insumoDTO);

if ($retorno) {
    $confirmacao = TRUE;
    echo "<script>";
    echo "    window.location.href = '../view/formCadastroInsumos.php?conf={$confirmacao}';";
    echo "</script>";
}
?>
