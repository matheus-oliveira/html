<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class InsumoDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

// exit();
    public function salvar(InsumoDTO $insumoDTO) {
        try {
            $sql1 = "INSERT INTO insumo(quantidade,preco,produto,dataCompra,tipo)
             VALUES(?,?,?,?,?)";

            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $insumoDTO->getQuantidade());
            $stmt1->bindValue(2, $insumoDTO->getPreco());
            $stmt1->bindValue(3, $insumoDTO->getProduto());
            $stmt1->bindValue(4, $insumoDTO->getDataCompra());
            $stmt1->bindValue(5, $insumoDTO->getTipo());
            $stmt1->execute();
            $idInsumo = $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllInsumo() {
        try {
            $sql1 = "SELECT * FROM insumo";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->execute();
            $usuarios = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirInsumoById($id) {
        try {
            $sql1 = "DELETE FROM insumo WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getInsumoById($id) {
        try {
            $sql1 = "SELECT * FROM insumo WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
            $insumo = $stmt1->fetch(PDO::FETCH_ASSOC);
            return $insumo;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarInsumo(InsumoDTO $insumoDTO) {
        try {
            $sql1 = "UPDATE insumo
                       SET quantidade = ?,
                           preco = ?,
                           produto = ?,
                           dataCompra = ?,
                           tipo = ?
                      WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $insumoDTO->getQuantidade());
            $stmt1->bindValue(2, $insumoDTO->getPreco());
            $stmt1->bindValue(3, $insumoDTO->getProduto());
            $stmt1->bindValue(4, $insumoDTO->getDataCompra());
            $stmt1->bindValue(5, $insumoDTO->getTipo());
            $stmt1->bindValue(6, $insumoDTO->getId());
            return $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
