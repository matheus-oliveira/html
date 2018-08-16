<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

//recuperar o formulario

// $sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];
$casa = $_POST["casa"];
$complemento = $_POST["complemento"];
$cep = $_POST["cep"];
$id = $_POST["id"];
$idEndereco = $_POST["id"];


echo "1: ";
echo $endereco;
echo "<br />";
echo "2: ";
echo $casa;
echo "<br />";
echo "3: ";
echo $complemento;
echo "<br />";
echo "4: ";
echo $cep;
echo "<br />"     ;
echo $idEndereco;
echo "<br />";
echo "5: "     ;
echo $id;
// exit();
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


$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->alterarUsuario($usuarioDTO, $idEndereco);
exit();
if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listaAllUsuario.php';";
    echo "</script>";
}
