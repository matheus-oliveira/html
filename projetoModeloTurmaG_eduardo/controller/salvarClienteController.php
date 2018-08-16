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

$clienteDTO = new ClienteDTO();

$clienteDTO->setNome($nome);
$clienteDTO->setCidade($cidade);
$clienteDTO->setCpf($cpf);
$clienteDTO->setDatanascimento($dtnasc);
$clienteDTO->setEndereco($endereco);
$clienteDTO->setEstado($estado);
$clienteDTO->setRg($rg);

$clienteDAO = new ClienteDAO();
$retorno = $clienteDAO->salvar($clienteDTO);

if ($retorno) {
    $confirmacao = TRUE;
    echo "<script>";
    echo "    window.location.href = '../view/formCadastroCliente.php?conf={$confirmacao}';";
    echo "</script>";
}





