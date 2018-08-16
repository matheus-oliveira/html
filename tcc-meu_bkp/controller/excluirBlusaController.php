<?php

require_once '../dao/blusaDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];

$blusaDAO = new BlusaDAO();
$blusaDAO->excluirBlusaById($id);

echo "<script>";
echo "    window.location.href = '../view/listarAllBlusa.php';";
echo "</script>";
?>
