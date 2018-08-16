<?php
require_once '../dao/insumoDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];

$insumoDAO = new InsumoDAO();
$insumoDAO->excluirInsumoById($id);

echo "<script>";
echo "    window.location.href = '../view/listarAllInsumo.php';";
echo "</script>";
?>
