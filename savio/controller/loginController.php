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






u


public function login($email,$senha) {
    try {
        $sql = "SELECT l.email,p.perfil,p.id FROM login l
        INNER JOIN perfil p ON (l.perfil_id = p.id)
                WHERE l.email = ? AND l.senha = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();
        $login = $stmt->fetch(PDO::FETCH_ASSOC);
        return $login;
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
}
