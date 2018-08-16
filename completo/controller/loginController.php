<?php
require_once '../dao/UsuarioDAO.php';
session_start();

$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->login($email, $senha);

if (!empty($usuario)) {
    $_SESSION["usuario"] = $usuario["email"];
    $_SESSION["perfil"] = $usuario["perfil"];
    echo "<script>";
    echo "    window.location.href = '../view/principal.php';";
    echo "</script>";
}else{
    echo "<script>";
    echo "    window.location.href = '../index.php';";
    echo "</script>";
}