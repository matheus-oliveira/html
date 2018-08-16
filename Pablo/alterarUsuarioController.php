<?php

require_once './suarioDTO.php';
require_once './usuarioDAO.php';

//recuperar o formulario
$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
// $sexo           = $_POST["sexo"]        ;
$dataNasc = $_POST["dataNasc"];
$endereco = $_POST["endereco"];
$casa = $_POST["casa"];
$complemento = $_POST["complemento"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];
// $id             = $_POST["id"]          ;
$idEndereco = $_POST["id_endereco"];


$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setId($id);

$usuarioDTO->setNome($nome);
$usuarioDTO->setCpf($cpf);
// $usuarioDTO->setSexo($sexo)                ;
$usuarioDTO->setDataNasc($dataNasc);
$usuarioDTO->setEndereco($endereco);
$usuarioDTO->setCasa($casa);
$usuarioDTO->setComplemento($complemento);
$usuarioDTO->setCep($cep);
$usuarioDTO->setTelefone($telefone);

$usuarioDTO->setEmail($email);
$usuarioDTO->setSenha($senha);


$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->alterarUsuario($usuarioDTO, $idEndereco);

if ($retorno) {
    echo "<script>";
    echo "    window.location.href = './listaAllUsuario.php';";
    echo "</script>";
}
