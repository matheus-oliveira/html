<?php

require_once 'conexao/Conexao.php';

class UsuarioDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllPerfil() {
        try {
            $sql = "SELECT * FROM perfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $perfils = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $perfils;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
       
    public function login($email,$senha) {
        try {
            $sql = "SELECT u.email,p.perfil,p.id FROM usuario u
                    INNER JOIN perfil p ON (u.perfil_id = p.id)
                    WHERE u.email = ? AND u.senha = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }    
}
