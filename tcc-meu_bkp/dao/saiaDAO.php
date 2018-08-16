<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class SaiaDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

// exit();
    public function salvar(SaiaDTO $saiaDTO) {
        try {
            $sql1 = "INSERT INTO item(produto,
                                       cintura,
                                       alturaQuadril,
                                       quadril,
                                       comprimento)

             VALUES(?,?,?,?,?)";

            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $saiaDTO->getProduto());
            $stmt1->bindValue(2, $saiaDTO->getCintura());
            $stmt1->bindValue(3, $saiaDTO->getAlturaQuadril());
            $stmt1->bindValue(4, $saiaDTO->getQuadril());
            $stmt1->bindValue(5, $saiaDTO->getComprimento());

            $stmt1->execute();
            $idSaia = $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllSaia() {
        try {
          $sql1 = "SELECT * FROM item where produto = 'saia'";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->execute();
            $itens = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            return $itens;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirSaiaById($id) {
        try {
            $sql1 = "DELETE FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getSaiaById($id) {
        try {
            $sql1 = "SELECT * FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
            $saia = $stmt1->fetch(PDO::FETCH_ASSOC);
            return $saia;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarSaia(SaiaDTO $saiaDTO) {
        try {
            $sql1 = "UPDATE item
                       SET cintura = ?,
                           alturaQuadril = ?,
                           quadril = ?,
                           comprimento = ?
                      WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $saiaDTO->getCintura());
            $stmt1->bindValue(2, $saiaDTO->getAlturaQuadril());
            $stmt1->bindValue(3, $saiaDTO->getQuadril());
            $stmt1->bindValue(4, $saiaDTO->getComprimento());
            $stmt1->bindValue(5, $saiaDTO->getId());

            return $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
