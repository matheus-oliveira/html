<?php

require_once "../dto/saiaDTO.php";
require_once "../dao/saiaDAO.php";

//recuperar o formulario
$produto = "saia";
$cintura = $_POST ["cintura"];
$comprimento = $_POST ["comprimento"];
$alturaQuadril = $_POST ["alturaQuadril"];
$quadril = $_POST ["quadril"];


$saiaDTO = new SaiaDTO();

$saiaDTO->setProduto($produto);
$saiaDTO->setAlturaQuadril($alturaQuadril);
$saiaDTO->setQuadril($quadril);
$saiaDTO->setCintura($cintura);
$saiaDTO->setComprimento($comprimento);



$saiaDAO = new SaiaDAO();
$retorno = $saiaDAO->salvar($saiaDTO);

echo "<script>";
echo "    window.location.href = '../view/formCadastroSaia.php';";
echo "</script>";

exit();
if ($retorno) {
    $confirmacao = TRUE;
    echo "<script>";
    echo "    window.location.href = '../view/formCadastroSaia.php?conf={$confirmacao}';";
    echo "</script>";
}
?>
