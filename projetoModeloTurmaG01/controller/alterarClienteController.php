<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';

//recuperar o formulario
$nome = $_POST["nome"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$dtnasc = $_POST["dtnasc"];
$endereco = $_POST["endereco"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$id = $_POST["id"];
        
$clienteDTO = new ClienteDTO();

$clienteDTO->setId($id);
$clienteDTO->setNome($nome);
$clienteDTO->setCidade($cidade);
$clienteDTO->setCpf($cpf);
$clienteDTO->setDatanascimento($dtnasc);
$clienteDTO->setEndereco($endereco);
$clienteDTO->setEstado($estado);
$clienteDTO->setRg($rg);

$clienteDAO = new ClienteDAO();
$retorno = $clienteDAO->alterarCliente($clienteDTO);

if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listaAllCliente.php';";
    echo "</script>";
}





