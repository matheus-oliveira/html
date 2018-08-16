<?php
require_once '../dao/loginDAO.php';
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

$loginDAO = new LoginDAO();
$login = $loginDAO->login($email, $senha);

if (!empty($login)) {
    $_SESSION["login"] = $login["email"];
    $_SESSION["perfil"] = $login["perfil"];
    echo "<script>";
    echo "    window.location.href = '../view/principal.php';";
    echo "</script>";
}else{
    echo "<script>";
    echo "    window.location.href = '../view/modelo.php';";
    echo "</script>";
}
