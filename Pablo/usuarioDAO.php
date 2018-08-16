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

            // echo "<br/>"     ;
            // echo"id Endereco:". $idEndereco;

            $sql2 = "INSERT INTO telefone(telefone)
                    VALUES (?)";
            $stmt2 = $this->pdo->prepare($sql2);
            $stmt2->bindValue(1, $usuarioDTO->getTelefone());
            $stmt2->execute();
            $idTelefone = $this->pdo->lastInsertId();

            // echo "<br/>"     ;
            // echo"id Telefone:". $idTelefone;

            $idPerfil = 1;
            // $idEncomenda = 1

            $sql3 = "INSERT INTO usuario(nome,sexo,cpf,dataNasc,email,senha,endereco_id,perfil_id/*encomenda_id*/)
                    VALUES (?,?,?,?,?,?,?,?/*,?*/)";
            $stmt3 = $this->pdo->prepare($sql3);
            $stmt3->bindValue(1, $usuarioDTO->getNome());
            $stmt3->bindValue(2, $usuarioDTO->getSexo());
            $stmt3->bindValue(3, $usuarioDTO->getCpf());
            $stmt3->bindValue(4, $usuarioDTO->getDataNasc());
            $stmt3->bindValue(5, $usuarioDTO->getEmail());
            $stmt3->bindValue(6, $usuarioDTO->getSenha());
            $stmt3->bindValue(7, $idEndereco);
            $stmt3->bindValue(8, $idPerfil);
            // $stmt3->bindValue(9, $idEncomenda);
            $stmt3->execute();
            $idUsuario = $this->pdo->lastInsertId();
            // echo "<br />"     ;
            // echo "id Usuario:".$idUsuario;

            $sql5 = "INSERT INTO telefone_has_usuario(telefone_id,usuario_id)
                    VALUES (?,?)";
            $stmt5 = $this->pdo->prepare($sql5);
            $stmt5->bindValue(1, $idTelefone);
            $stmt5->bindValue(2, $idUsuario);
            $stmt5->execute();
        } catch (PDOExcenption $exc) {
            echo $exc->getMessage();
        }
    }

// fim funcao salvar

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

    public function getAllTelefone() {
        try {
            $sql = "SELECT * FROM telefone";
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
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getTelefoneById($id) {
        try {
            $sql = "SELECT * FROM telefone WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getEnderecoById($id) {
        try {
            $sql = "SELECT * FROM endereco WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
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
            // $stmt1->bindValue(5, $usuarioDTO->$idusuario);
            $stmt1->execute();
            // $idEndereco = $this->pdo->lastInsertId();
            // echo "<br/>"     ;
            // echo"id Endereco:". $idEndereco;
            // echo "test";
            // exit();
            $sql2 = "UPDATE telefone
                   SET    telefone    = ?
                   WHERE  id          = ?";
            $stmt2 = $this->pdo->prepare($sql2);
            $stmt2->bindValue(1, $usuarioDTO->getTelefone());
            $stmt2->bindValue(2, $usuarioDTO->getId());
            $stmt2->execute();
            // $idTelefone = $this->pdo->lastInsertId();
            // echo "<br/>"     ;
            // echo"id Telefone:". $idTelefone;

            $idPerfil = 1;
            // $idEncomenda = 1

            $sql3 = "UPDATE usuario
                   SET  nome         = ?,
                        sexo         = ?,
                        cpf          = ?,
                        dataNasc     = ?,
                        email        = ?,
                        senha        = ?
                  WHERE id           = ?";
            $stmt3 = $this->pdo->prepare($sql3);
            $stmt3->bindValue(1, $usuarioDTO->getNome());
            $stmt3->bindValue(2, $usuarioDTO->getSexo());
            $stmt3->bindValue(3, $usuarioDTO->getCpf());
            $stmt3->bindValue(4, $usuarioDTO->getDataNasc());
            $stmt3->bindValue(5, $usuarioDTO->getEmail());
            $stmt3->bindValue(6, $usuarioDTO->getSenha());
            $stmt3->bindValue(7, $usuarioDTO->getId());
            // $stmt3->bindValue(8, $idEncomenda);
            $stmt3->execute();
            // $idUsuario = $this->pdo->lastInsertId();
            // echo "<br />"     ;
            // echo "id Usuario:".$idUsuario;
            // $sql5 = "INSERT INTO telefone_has_usuario(telefone_id,usuario_id)
            //         VALUES (?,?)";
            //         $stmt5 = $this->pdo->prepare($sql5);
            //         $stmt5->bindValue(1,  $usuarioDTO->getId());
            //         $stmt5->bindValue(2,  $usuarioDTO->getId());
            //         $stmt5->execute();
        } catch (PDOExcenption $exc) {
            echo $exc->getMessage();
        }
    }

// fim funcao salvar
}
