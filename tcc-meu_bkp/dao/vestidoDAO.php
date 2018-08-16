<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class VestidoDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }
// exit();
    public function salvar(VestidoDTO $vestidoDTO) {
        try {
            $sql1 = "INSERT INTO item(produto,
                                       ombro,
                                       costa,
                                       busto,
                                       alturaBusto,
                                       alturaCintura,
                                       cintura,
                                       quadril,
                                       alturaQuadril,
                                       comprimento )

             VALUES(?,?,?,?,?,?,?,?,?,?)";

            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $vestidoDTO->getProduto());
            $stmt1->bindValue(2, $vestidoDTO->getOmbro());
            $stmt1->bindValue(3, $vestidoDTO->getCosta());
            $stmt1->bindValue(4, $vestidoDTO->getBusto());
            $stmt1->bindValue(5, $vestidoDTO->getAlturaBusto());
            $stmt1->bindValue(6, $vestidoDTO->getAlturaCintura());
            $stmt1->bindValue(7, $vestidoDTO->getCintura());
            $stmt1->bindValue(8, $vestidoDTO->getQuadril());
            $stmt1->bindValue(9, $vestidoDTO->getAlturaQuadril());
            $stmt1->bindValue(10, $vestidoDTO->getComprimento());
            $stmt1->execute();
            $idVestido = $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllVestido() {
        try {
            $sql1 = "SELECT * FROM item where produto ='vestido'";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->execute();
            $itens = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            return $itens;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirVestidoById($id) {
        try {
            $sql1 = "DELETE FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getVestidoById($id) {
        try {
            $sql1 = "SELECT * FROM item WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
            $vestido = $stmt1->fetch(PDO::FETCH_ASSOC);
            return $vestido;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarVestido(VestidoDTO $vestidoDTO) {
        try {
            $sql1 = "UPDATE item
                       SET produto = ?,
                            ombro = ?,
                            costa = ?,
                            busto = ?,
                            alturaBusto = ?,
                            alturaCintura = ?,
                            cintura = ?,
                            quadril = ?,
                            alturaQuadril = ?,
                            comprimento = ? 
                      WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $vestidoDTO->getProduto());
            $stmt1->bindValue(2, $vestidoDTO->getOmbro());
            $stmt1->bindValue(3, $vestidoDTO->getCosta());
            $stmt1->bindValue(4, $vestidoDTO->getBusto());
            $stmt1->bindValue(5, $vestidoDTO->getAlturaBusto());
            $stmt1->bindValue(6, $vestidoDTO->getAlturaCintura());
            $stmt1->bindValue(7, $vestidoDTO->getCintura());
            $stmt1->bindValue(8, $vestidoDTO->getQuadril());
            $stmt1->bindValue(9, $vestidoDTO->getAlturaQuadril());
            $stmt1->bindValue(10, $vestidoDTO->getComprimento());
            $stmt1->bindValue(11, $vestidoDTO->getId());

            return $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
