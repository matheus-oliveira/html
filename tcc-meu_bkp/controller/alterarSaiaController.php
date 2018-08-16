<?php

require_once '../dto/saiaDTO.php';
require_once '../dao/saiaDAO.php';

//recuperar o formulario

$cintura = $_POST ["cintura"];
$alturaQuadril = $_POST ["alturaQuadril"];
$quadril = $_POST ["quadril"];
$comprimento = $_POST ["comprimento"];
$id = $_POST ["id"];



$saiaDTO = new SaiaDTO();

$saiaDTO->setCintura($cintura);
$saiaDTO->setAlturaQuadril($alturaQuadril);
$saiaDTO->setQuadril($quadril);
$saiaDTO->setComprimento($comprimento);

$saiaDTO->setId($id);

$saiaDAO = new SaiaDAO();
$retorno = $saiaDAO->alterarSaia($saiaDTO);

if ($retorno) {
    echo "<script>";
    echo "    window.location.href = '../view/listarAllSaia.php';";
    echo "</script>";
}
?>
