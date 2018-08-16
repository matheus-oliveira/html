<?php
require_once '../dao/UsuarioDAO.php';

//recuperar o formulario
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->login($email, $senha);

if (!empty($usuario)){
    echo "logado";
}else{
    echo "<script>";
    echo "    window.location.href = '../view/login.php';";
    echo "</script>";
}