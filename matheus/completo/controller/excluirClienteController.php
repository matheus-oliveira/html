<?php
require_once '../dao/ClienteDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];

$clienteDAO = new ClienteDAO();
$clienteDAO->excluirClienteById($id);

echo "<script>";
echo "    window.location.href = '../view/listaAllCliente.php';";
echo "</script>";
?>
