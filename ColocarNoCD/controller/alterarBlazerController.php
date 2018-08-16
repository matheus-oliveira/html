<?php

require_once '../dto/blazerDTO.php';
require_once '../dao/blazerDAO.php';

//recuperar o formulario

$cintura = $_POST ["cintura"];
$comprimento = $_POST ["comprimento"];
$ombro = $_POST ["ombro"];
$costa = $_POST ["costa"];
$busto = $_POST ["busto"];
$alturaCintura = $_POST ["alturaCintura"];
$manga = $_POST ["manga"];
$punho = $_POST ["punho"];
$id = $_POST ["id"];



$blazerDTO = new BlazerDTO();

$blazerDTO->setCintura($cintura);
$blazerDTO->setComprimento($comprimento);
$blazerDTO->setOmbro($ombro);
$blazerDTO->setCosta($costa);
$blazerDTO->setBusto($busto);
$blazerDTO->setalturaCintura($alturaCintura);
$blazerDTO->setManga($manga);
$blazerDTO->setPunho($punho);
$blazerDTO->setId($id);

$blazerDAO = new BlazerDAO();
$retorno = $blazerDAO->alterarBlazer($blazerDTO);

if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listarAllBlazer.php';";
    echo "</script>";
}
?>
