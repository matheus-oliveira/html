<?php

require_once '../dao/usuarioDAO.php';

$id = $_REQUEST["id"]; //$_GET["id"];


$usuarioDAO = new UsuarioDAO();
$usuarioDAO->excluirUsuarioById($id);

echo "<script>";
echo "    window.location.href = '../view/listarAllUsuario.php';";
echo "</script>";
?>
