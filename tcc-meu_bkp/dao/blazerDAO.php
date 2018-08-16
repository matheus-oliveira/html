<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class BlazerDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }
// exit();
    public function salvar(BlazerDTO $blazerDTO) {
        try {
            $sql1 = "INSERT INTO item(produto,
                                       cintura,
                                       comprimento,
                                       ombro,
                                       costa,
                                       busto,
                                       alturaCintura,
                                       manga,
                                       punho)

             VALUES(?,?,?,?,?,?,?,?,?)";

            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $blazerDTO->getProduto());
            $stmt1->bindValue(2, $blazerDTO->getCintura());
            $stmt1->bindValue(3, $blazerDTO->getComprimento());
            $stmt1->bindValue(4, $blazerDTO->getOmbro());
            $stmt1->bindValue(5, $blazerDTO->getCosta());
            $stmt1->bindValue(6, $blazerDTO->getBusto());
            $stmt1->bindValue(7, $blazerDTO->getalturaCintura());
            $stmt1->bindValue(8, $blazerDTO->getManga());
            $stmt1->bindValue(9, $blazerDTO->getPunho());
            $stmt1->execute();
            $idBlazer = $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllBlazer() {
        try {
            $sql1 = "SELECT * FROM item where produto ='blazer'";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->execute();
            $itens = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            return $itens;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirBlazerById($id) {
        try {
            $sql1 = "DELETE FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getBlazerById($id) {
        try {
            $sql1 = "SELECT * FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
            $blazer = $stmt1->fetch(PDO::FETCH_ASSOC);
            return $blazer;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarBlazer(BlazerDTO $blazerDTO) {
        try {
            $sql1 = "UPDATE item
                       SET cintura = ?,
                           comprimento = ?,
                           ombro = ?,
                           costa = ?,
                           busto = ?,
                           alturaCintura = ?,
                           manga = ?,
                           punho = ?
                      WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $blazerDTO->getCintura());
            $stmt1->bindValue(2, $blazerDTO->getComprimento());
            $stmt1->bindValue(3, $blazerDTO->getOmbro());
            $stmt1->bindValue(4, $blazerDTO->getCosta());
            $stmt1->bindValue(5, $blazerDTO->getBusto());
            $stmt1->bindValue(6, $blazerDTO->getalturaCintura());
            $stmt1->bindValue(7, $blazerDTO->getManga());
            $stmt1->bindValue(8, $blazerDTO->getPunho());
            $stmt1->bindValue(9, $blazerDTO->getId());

            return $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
