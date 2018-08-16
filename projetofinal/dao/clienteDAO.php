<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class ClienteDAO {



    public function salvar(ClienteDTO $clienteDTO) {
        try {
            $sql1 = "INSERT INTO endereco(casa,cep,endereco,complemento)
                    VALUES(?,?,?,?)";
                    $stmt1 = $this->pdo->prepare($sql1);
                    $stmt1->bindValue(1, $clienteDTO->getCasa());
                    $stmt1->bindValue(2, $clienteDTO->getCep());
                    $stmt1->bindValue(3, $clienteDTO->getEndereco());
                    $stmt1->bindValue(4, $clienteDTO->getComplemento());
                    $stmt1->execute();
                    $idEndereco = $this->pdo->lastInsertId();

            // $x = new PDO("mysql:host=localhost;dbname=tcc", "root", "root");

            // exit();
            $sql2 = "INSERT INTO telefone(telefone)
                    VALUES (?)";

            // $pdo = new PDO("mysql:host=127.0.0.1;charset=utf8;dbname=tcc", "root", "root");

//            $stmt2 = $this->pdo->prepare($sql2);
//                        echo "teste";
            // exit();
            $stmt2 = $this->pdo->prepare($sql2);
            $stmt2->bindValue(1, $clienteDTO->getTelefone());
            $stmt2->execute();
            $idTelefone = $this->pdo->lastInsertId();

            $sql3 = "INSERT INTO usuario(nome,sexo,dataNasc,cpf,email,senha,endereco_id)
                    VALUES (?,?,?,?,?,?)";
                    $stmt3 = $this->pdo->prepare($sql3);
                    $stmt3->bindValue(1, $clienteDTO->getNome());
                    $stmt3->bindValue(2, $clienteDTO->getSexo());
                    $stmt3->bindValue(3, $clienteDTO->getCpf());
                    $stmt3->bindValue(2, $clienteDTO->getDataNasc());
                    $stmt3->bindValue(4, $clienteDTO->getEmail());
                    $stmt3->bindValue(5, $clienteDTO->getSenha());
                    $stmt3->bindValue(6, $idEndereco);
                    $stmt3->execute();
                    $idUsuario = $this->pdo->lastInsertId();

            $sql4 = "INSERT INTO cliente(usuario_id)
                    VALUES (?)";
                    $stmt4 = $this->pdo->prepare($sql4);
                    $stmt4->bindValue(1, $idUsuario);

                    $stmt4->execute();

            $sql5 = "INSERT INTO telefone_has_usuario(telefone_id,usuario_id)
                    VALUES (?,?)";
                    $stmt5 = $this->pdo->prepare($sql5);
                    $stmt5->bindValue(1, $clienteDTO->$idTelefone());
                    $stmt5->bindValue(2, $clienteDTO->$idUsuario());
                    $stmt5->execute();
        } catch (PDOExcenption $exc) {
            echo $exc->getMessage();
        }
    }

}
