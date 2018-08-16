<?php

require_once '../dto/blusaDTO.php';
require_once '../dao/blusaDAO.php';

//recuperar o formulario

$cintura = $_POST ["cintura"];
$comprimento = $_POST ["comprimento"];
$ombro = $_POST ["ombro"];
$costa = $_POST ["costa"];
$busto = $_POST ["busto"];
$alturaBusto = $_POST ["alturaBusto"];
$manga = $_POST ["manga"];
$punho = $_POST ["punho"];
$id = $_POST ["id"];



$blusaDTO = new BlusaDTO();

$blusaDTO->setCintura($cintura);
$blusaDTO->setComprimento($comprimento);
$blusaDTO->setOmbro($ombro);
$blusaDTO->setCosta($costa);
$blusaDTO->setBusto($busto);
$blusaDTO->setAlturaBusto($alturaBusto);
$blusaDTO->setManga($manga);
$blusaDTO->setPunho($punho);
$blusaDTO->setId($id);

$blusaDAO = new BlusaDAO();
$retorno = $blusaDAO->alterarBlusa($blusaDTO);

if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listarAllBlusa.php';";
    echo "</script>";
}
?>
