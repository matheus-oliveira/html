<?php

require_once "../dto/blazerDTO.php";
require_once "../dao/blazerDAO.php";

//recuperar o formulario
$produto = "blazer";
$cintura = $_POST ["cintura"];
$comprimento = $_POST ["comprimento"];
$ombro = $_POST ["ombro"];
$costa = $_POST ["costa"];
$busto = $_POST ["busto"];
$alturaCintura = $_POST ["alturaCintura"];
$manga = $_POST ["manga"];
$punho = $_POST ["punho"];


$blazerDTO = new BlazerDTO();

$blazerDTO->setProduto($produto);
$blazerDTO->setOmbro($ombro);
$blazerDTO->setCosta($costa);
$blazerDTO->setalturaCintura($alturaCintura);
$blazerDTO->setCintura($cintura);
$blazerDTO->setComprimento($comprimento);
$blazerDTO->setManga($manga);
$blazerDTO->setPunho($punho);
$blazerDTO->setBusto($busto);



$blazerDAO = new BlazerDAO();
$retorno = $blazerDAO->salvar($blazerDTO);

echo "<script>";
echo "    window.location.href = '../view/formCadastroBlazer.php';";
echo "</script>";


if ($retorno) {
    $confirmacao = TRUE;
    echo "<script>";
    echo "    window.location.href = '../view/formCadastroBlazer.php?conf={$confirmacao}';";
    echo "</script>";
}
?>
