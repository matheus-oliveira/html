<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class BlusaDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }
// exit();
    public function salvar(BlusaDTO $blusaDTO) {
        try {
            $sql1 = "INSERT INTO item(produto,
                                       cintura,
                                       comprimento,
                                       ombro,
                                       costa,
                                       busto,
                                       alturaBusto,
                                       manga,
                                       punho)

             VALUES(?,?,?,?,?,?,?,?,?)";

            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $blusaDTO->getProduto());
            $stmt1->bindValue(2, $blusaDTO->getCintura());
            $stmt1->bindValue(3, $blusaDTO->getComprimento());
            $stmt1->bindValue(4, $blusaDTO->getOmbro());
            $stmt1->bindValue(5, $blusaDTO->getCosta());
            $stmt1->bindValue(6, $blusaDTO->getBusto());
            $stmt1->bindValue(7, $blusaDTO->getAlturaBusto());
            $stmt1->bindValue(8, $blusaDTO->getManga());
            $stmt1->bindValue(9, $blusaDTO->getPunho());
            $stmt1->execute();
            $idBlusa = $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllBlusa() {
        try {
            $sql1 = "SELECT * FROM item where produto ='blusa'";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->execute();
            $itens = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            return $itens;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirBlusaById($id) {
        try {
            $sql1 = "DELETE FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getBlusaById($id) {
        try {
            $sql1 = "SELECT * FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
            $blusa = $stmt1->fetch(PDO::FETCH_ASSOC);
            return $blusa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarBlusa(BlusaDTO $blusaDTO) {
        try {
            $sql1 = "UPDATE item
                       SET cintura = ?,
                           comprimento = ?,
                           ombro = ?,
                           costa = ?,
                           busto = ?,
                           alturaBusto = ?,
                           manga = ?,
                           punho = ?
                      WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $blusaDTO->getCintura());
            $stmt1->bindValue(2, $blusaDTO->getComprimento());
            $stmt1->bindValue(3, $blusaDTO->getOmbro());
            $stmt1->bindValue(4, $blusaDTO->getCosta());
            $stmt1->bindValue(5, $blusaDTO->getBusto());
            $stmt1->bindValue(6, $blusaDTO->getAlturaBusto());
            $stmt1->bindValue(7, $blusaDTO->getManga());
            $stmt1->bindValue(8, $blusaDTO->getPunho());
            $stmt1->bindValue(9, $blusaDTO->getId());

            return $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
