<?php

require_once '../dao/vestidoDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];

$vestidoDAO = new VestidoDAO();
$vestidoDAO->excluirVestidoById($id);

echo "<script>";
echo "    window.location.href = '../view/listarAllVestido.php';";
echo "</script>";
?>
