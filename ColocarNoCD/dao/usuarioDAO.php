<?php

require_once 'conexao/conexao.php';

/**
 *
 */
class UsuarioDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar(UsuarioDTO $usuarioDTO) {
        try {
            $idPerfil = 1;

            $sql2 = "INSERT INTO login(email,
                                       senha,
                                        perfil_id)
             VALUES(?,?,?)";

            $stmt2 = $this->pdo->prepare($sql2);
            $stmt2->bindValue(1, $usuarioDTO->getEmail());
            $stmt2->bindValue(2, $usuarioDTO->getSenha());
            $stmt2->bindValue(3,$idPerfil);
            $stmt2->execute();
            $idLogin = $this->pdo->lastInsertId();









            $sql1 = "INSERT INTO usuario(nome,
                                        dataNasc,
                                        cpf,
                                        telefone,
                                        endereco,
                                        casa,
                                        cep,
                                        complemento,
                                        sexo,
                                        login_id
                                        )
             VALUES(?,?,?,?,?,?,?,?,?,?)";

            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $usuarioDTO->getNome());
            $stmt1->bindValue(2, $usuarioDTO->getDataNasc());
            $stmt1->bindValue(3, $usuarioDTO->getCpf());
            $stmt1->bindValue(4, $usuarioDTO->getTelefone());
            $stmt1->bindValue(5, $usuarioDTO->getEndereco());
            $stmt1->bindValue(6, $usuarioDTO->getCasa());
            $stmt1->bindValue(7, $usuarioDTO->getCep());
            $stmt1->bindValue(8, $usuarioDTO->getComplemento());
            $stmt1->bindValue(9, $usuarioDTO->getSexo());
            $stmt1->bindValue(10, $idLogin);
            $stmt1->execute();
            $idUsuario = $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// fim funcao salvar
    //listar todos os usuarios
    public function getAllUsuario() {
        try {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllLogin() {
            try {
                $sql = "SELECT * FROM login";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                $login = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $login;
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }

    // captura dados pelo id para alterlos
    public function getUsuarioById($id) {
        try {
            $sql = "SELECT * FROM usuario WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getEnderecoById($id_endereco) {
        try {
            $sql1 = "SELECT * FROM endereco WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $id_endereco);
            $stmt1->execute();
            $endereco = $stmt1->fetch(PDO::FETCH_ASSOC);
            return $endereco;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // altera os intens selecionados pelo id
    public function alterarUsuario(UsuarioDTO $usuarioDTO) {
        try {
            $sql3 = "UPDATE usuario
                    SET   nome          = ?,
                          sexo          = ?,
                          cpf           = ?,
                          dataNasc      = ?,
                          telefone      = ?,
                          casa          = ?,
                          cep           = ?,
                          endereco      = ?,
                          complemento   = ?
                    WHERE id           = ?";
            $stmt3 = $this->pdo->prepare($sql3);
            $stmt3->bindValue(1, $usuarioDTO->getNome());
            $stmt3->bindValue(2, $usuarioDTO->getSexo());
            $stmt3->bindValue(3, $usuarioDTO->getCpf());
            $stmt3->bindValue(4, $usuarioDTO->getDataNasc());
            $stmt3->bindValue(5, $usuarioDTO->getTelefone());
            $stmt3->bindValue(6, $usuarioDTO->getCasa());
            $stmt3->bindValue(7, $usuarioDTO->getCep());
            $stmt3->bindValue(8, $usuarioDTO->getEndereco());
            $stmt3->bindValue(9, $usuarioDTO->getComplemento());
            $stmt3->bindValue(10, $usuarioDTO->getId());
            $stmt3->execute();
        } catch (PDOExcenption $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirUsuarioById($id) {
        try {
            $sql = "DELETE FROM usuario WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
