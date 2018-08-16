<?php

require_once 'conexao/conexao.php';

class LoginDAO {

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
}
