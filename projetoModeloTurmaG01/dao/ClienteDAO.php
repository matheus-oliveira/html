<?php

require_once 'conexao/Conexao.php';

class ClienteDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar(ClienteDTO $clienteDTO) {
        try {

            $sql1 = "INSERT INTO usuario(email,senha,perfil_id)
                   VALUES(?,?,?)";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $clienteDTO->getEmail());
            $stmt1->bindValue(2, $clienteDTO->getSenha());
            $stmt1->bindValue(3, $clienteDTO->getPerfil());
            $stmt1->execute();
            $idusuario = $this->pdo->lastInsertId();


            $sql2 = "INSERT INTO cliente(nome,rg,
                   cpf,datanascimento,endereco,estado,cidade,usuario_id)
                   VALUES(?,?,?,?,?,?,?,?)";
            $stmt2 = $this->pdo->prepare($sql2);
            $stmt2->bindValue(1, $clienteDTO->getNome());
            $stmt2->bindValue(2, $clienteDTO->getRg());
            $stmt2->bindValue(3, $clienteDTO->getCpf());
            $stmt2->bindValue(4, $clienteDTO->getDatanascimento());
            $stmt2->bindValue(5, $clienteDTO->getEndereco());
            $stmt2->bindValue(6, $clienteDTO->getEstado());
            $stmt2->bindValue(7, $clienteDTO->getCidade());
            $stmt2->bindValue(8, $idusuario);
            return $stmt2->execute();

        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllCliente() {
        try {
            $sql = "SELECT * FROM cliente";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirClienteById($id) {
        try {
            $sql = "DELETE FROM cliente WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getClienteById($id) {
        try {
            $sql = "SELECT * FROM cliente WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

     public function alterarCliente(ClienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE cliente
                    SET nome = ?,
                        rg = ?,
                        cpf = ?,
                        datanascimento = ?,
                        endereco = ?,
                        estado = ?,
                        cidade = ?
                   WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getRg());
            $stmt->bindValue(3, $clienteDTO->getCpf());
            $stmt->bindValue(4, $clienteDTO->getDatanascimento());
            $stmt->bindValue(5, $clienteDTO->getEndereco());
            $stmt->bindValue(6, $clienteDTO->getEstado());
            $stmt->bindValue(7, $clienteDTO->getCidade());
            $stmt->bindValue(8, $clienteDTO->getId());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
