<?php

require_once "../dto/blusaDTO.php";
require_once "../dao/blusaDAO.php";

//recuperar o formulario
$produto = "blusa";
$cintura = $_POST ["cintura"];
$comprimento = $_POST ["comprimento"];
$ombro = $_POST ["ombro"];
$costa = $_POST ["costa"];
$busto = $_POST ["busto"];
$alturaBusto = $_POST ["alturaBusto"];
$manga = $_POST ["manga"];
$punho = $_POST ["punho"];


$blusaDTO = new BlusaDTO();

$blusaDTO->setProduto($produto);
$blusaDTO->setOmbro($ombro);
$blusaDTO->setCosta($costa);
$blusaDTO->setAlturaBusto($alturaBusto);
$blusaDTO->setCintura($cintura);
$blusaDTO->setComprimento($comprimento);
$blusaDTO->setManga($manga);
$blusaDTO->setPunho($punho);
$blusaDTO->setBusto($busto);



$blusaDAO = new BlusaDAO();
$retorno = $blusaDAO->salvar($blusaDTO);


if ($retorno) {
    $confirmacao == TRUE;
    echo "<script>";
    echo "    window.location.href = '../view/formCadastroBlusa.php?conf={$confirmacao}';";
    echo "</script>";
}

echo "<script>";
echo "    window.location.href = '../view/formCadastroBlusa.php';";
echo "</script>";
?>
