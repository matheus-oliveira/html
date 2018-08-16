<?php

require_once '../dto/insumoDTO.php';
require_once '../dao/insumoDAO.php';

//recuperar o formulario

$produto = $_POST ["produto"];
$quantidade = $_POST ["quantidade"];
$preco = $_POST ["preco"];
$dataCompra = $_POST ["dataCompra"];
$tipo = $_POST ["tipo"];
$id = $_POST ["id"];


$insumoDTO = new InsumoDTO();

$insumoDTO->setQuantidade($quantidade);
$insumoDTO->setPreco($preco);
$insumoDTO->setProduto($produto);
$insumoDTO->setDataCompra($dataCompra);
$insumoDTO->setTipo($tipo);
$insumoDTO->setId($id);

$insumoDAO = new InsumoDAO();
$retorno = $insumoDAO->alterarInsumo($insumoDTO);
if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listarAllInsumo.php';";
    echo "</script>";
}
?>
