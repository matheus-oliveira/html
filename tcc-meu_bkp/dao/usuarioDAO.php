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
            $sql1 = "INSERT INTO endereco(casa,cep,endereco,complemento)
                    VALUES(?,?,?,?)";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $usuarioDTO->getCasa());
            $stmt1->bindValue(2, $usuarioDTO->getCep());
            $stmt1->bindValue(3, $usuarioDTO->getEndereco());
            $stmt1->bindValue(4, $usuarioDTO->getComplemento());
            $stmt1->execute();
            $idEndereco = $this->pdo->lastInsertId();

            $idPerfil = 1;

            $sql3 = "INSERT INTO usuario(nome,sexo,cpf,dataNasc,email,senha,telefone,perfil_id,casa,cep,endereco,complemento)
                    VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt3 = $this->pdo->prepare($sql3);
            $stmt3->bindValue(1, $usuarioDTO->getNome());
            $stmt3->bindValue(2, $usuarioDTO->getSexo());
            $stmt3->bindValue(3, $usuarioDTO->getCpf());
            $stmt3->bindValue(4, $usuarioDTO->getDataNasc());
            $stmt3->bindValue(5, $usuarioDTO->getEmail());
            $stmt3->bindValue(6, $usuarioDTO->getSenha());
            $stmt3->bindValue(7, $usuarioDTO->getTelefone());
            $stmt3->bindValue(9, $idPerfil);
            $stmt1->bindValue(10, $usuarioDTO->getCasa());
            $stmt1->bindValue(11, $usuarioDTO->getCep());
            $stmt1->bindValue(12, $usuarioDTO->getEndereco());
            $stmt1->bindValue(13, $usuarioDTO->getComplemento());
            $stmt3->execute();
            $idUsuario = $this->pdo->lastInsertId();
            // echo "<br />"     ;
            // echo "id Usuario:".$idUsuario;
        } catch (PDOExcenption $exc) {
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
    public function alterarUsuario(UsuarioDTO $usuarioDTO, $idEndereco) {
        try {
            $sql1 = "UPDATE endereco
                   SET   casa          = ?,
                         cep           = ?,
                         endereco      = ?,
                         complemento   = ?
                   WHERE id            = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->bindValue(1, $usuarioDTO->getCasa());
            $stmt1->bindValue(2, $usuarioDTO->getCep());
            $stmt1->bindValue(3, $usuarioDTO->getEndereco());
            $stmt1->bindValue(4, $usuarioDTO->getComplemento());
            $stmt1->bindValue(5, $idEndereco);
            return $stmt1->execute();

            $sql3 = "UPDATE usuario
                   SET  nome         = ?,
                        sexo         = ?,
                        cpf          = ?,
                        dataNasc     = ?,
                        email        = ?,
                        telefone     = ?
                  WHERE id           = ?";
            $stmt3 = $this->pdo->prepare($sql3);
            $stmt3->bindValue(1, $usuarioDTO->getNome());
            $stmt3->bindValue(2, $usuarioDTO->getSexo());
            $stmt3->bindValue(3, $usuarioDTO->getCpf());
            $stmt3->bindValue(4, $usuarioDTO->getDataNasc());
            $stmt3->bindValue(5, $usuarioDTO->getEmail());
            $stmt3->bindValue(6, $usuarioDTO->getTelefone());
            $stmt3->bindValue(7, $usuarioDTO->getId());
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
