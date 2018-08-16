<?php

require_once '../dao/blazerDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];

$blazerDAO = new BlazerDAO();
$blazerDAO->excluirBlazerById($id);

echo "<script>";
echo "    window.location.href = '../view/listarAllBlazer.php';";
echo "</script>";
?>
