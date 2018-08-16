<?php

require_once "../dto/vestidoDTO.php";
require_once "../dao/vestidoDAO.php";

//recuperar o formulario
$produto = "vestido";
$ombro = $_POST ["ombro"];
$costa = $_POST ["costa"];
$busto = $_POST ["busto"];
$cintura = $_POST ["cintura"];
$alturaBusto = $_POST ["alturaBusto"];
$alturaCintura = $_POST ["alturaCintura"];
$cintura = $_POST ["cintura"];
$quadril = $_POST ["quadril"];
$alturaQuadril = $_POST ["alturaQuadril"];
$comprimento = $_POST ["comprimento"];


$vestidoDTO = new VestidoDTO();


$vestidoDTO->setProduto($produto);
$vestidoDTO->setOmbro($ombro);
$vestidoDTO->setCosta($costa);
$vestidoDTO->setBusto($busto);
$vestidoDTO->setAlturaBusto($alturaBusto);
$vestidoDTO->setAlturaCintura($alturaCintura);
$vestidoDTO->setCintura($cintura);
$vestidoDTO->setQuadril($quadril);
$vestidoDTO->setAlturaQuadril($alturaQuadril);
$vestidoDTO->setComprimento($comprimento);





$vestidoDAO = new VestidoDAO();
$retorno = $vestidoDAO->salvar($vestidoDTO);

echo "<script>";
echo "    window.location.href = '../view/formCadastroVestido.php';";
echo "</script>";

exit();
if ($retorno) {
    $confirmacao = TRUE;
    echo "<script>";
    echo "    window.location.href = '../view/formCadastroVestido.php?conf={$confirmacao}';";
    echo "</script>";
}


?>
