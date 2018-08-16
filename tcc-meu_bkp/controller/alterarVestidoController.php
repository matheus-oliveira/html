<?php

require_once '../dto/vestidoDTO.php';
require_once '../dao/vestidoDAO.php';

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



$vestidoDTO = new VestidoDTO();

$vestidoDTO->setCintura($cintura);
$vestidoDTO->setComprimento($comprimento);
$vestidoDTO->setOmbro($ombro);
$vestidoDTO->setCosta($costa);
$vestidoDTO->setBusto($busto);
$vestidoDTO->setAlturaBusto($alturaBusto);
$vestidoDTO->setManga($manga);
$vestidoDTO->setPunho($punho);
$vestidoDTO->setId($id);

$vestidoDAO = new VestidoDAO();
$retorno = $vestidoDAO->alterarVestido($vestidoDTO);

if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listarAllVestido.php';";
    echo "</script>";
}
?>
