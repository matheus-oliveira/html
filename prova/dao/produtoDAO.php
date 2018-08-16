<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class ProdutoDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

//
    public function salvar(ProdutoDTO $produtoDTO) {
        try {
            $sql1 = "INSERT INTO produto(nome,
                                       quantidade,
                                       fabricante,
                                       dataCadastro,
                                       preco)

             VALUES(?,?,?,?,?)";


            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $produtoDTO->getNome());
            $stmt1->bindValue(2, $produtoDTO->getQuantidade());
            $stmt1->bindValue(3, $produtoDTO->getFabricante());
            $stmt1->bindValue(4, $produtoDTO->getDataCadastro());
            $stmt1->bindValue(5, $produtoDTO->getPreco());
            $stmt1->execute();
            $idProduto = $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllProduto() {
        try {
            $sql1 = "SELECT * FROM produto";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->execute();
            $itens = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            return $itens;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirProdutoById($id) {
        try {
            $sql1 = "DELETE FROM produto WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getProdutoById($id) {
        try {
            $sql1 = "SELECT * FROM produto WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id);
            $stmt1->execute();
            $produto = $stmt1->fetch(PDO::FETCH_ASSOC);
            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarProduto(ProdutoDTO $produtoDTO) {
        try {
            $sql1 = "UPDATE produto
                      SET nome         = ?,
                          quantidade   = ?,
                          fabricante   = ?,
                          dataCadastro = ?,
                          preco = ?
                      WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $produtoDTO->getNome());
            $stmt1->bindValue(2, $produtoDTO->getQuantidade());
            $stmt1->bindValue(3, $produtoDTO->getFabricante());
            $stmt1->bindValue(4, $produtoDTO->getDataCadastro());
            $stmt1->bindValue(5, $produtoDTO->getPreco());
            $stmt1->bindValue(6, $produtoDTO->getId());

            return $stmt1->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
