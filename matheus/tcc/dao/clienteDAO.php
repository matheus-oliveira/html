
<?php
require_once 'conexao/conexao.php';
/**
 *
 */
class ClienteDAO
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = Conexao::getInstance();
  }

  public function salvar(clienteDTO $clienteDTO)
  {
    try {
      $sql1 = "INSERT INTO usuario(nome,sexo,cpf)
               VALUES (?,?,?)";
               $stmt1 = $this->pdo->prepare($sql1);
               $stmt1->bindValue(1, $clienteDTO->getNome());
               $stmt1->bindValue(2, $clienteDTO->getSexo());
               $stmt1->bindValue(3, $clienteDTO->getCpf());
               $stmt1->execute();
               $idusuario = $this->pdo->lastInsertId();


    } catch (PDOExcenption $exc) {
      echo $exc->getMessage();
    }

  }
}
