<?php

require_once '../dao/saiaDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];

$saiaDAO = new SaiaDAO();
$saiaDAO->excluirSaiaById($id);

echo "<script>";
echo "    window.location.href = '../view/listarAllSaia.php';";
echo "</script>";
?>
