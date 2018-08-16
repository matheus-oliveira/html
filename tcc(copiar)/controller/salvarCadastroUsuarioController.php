<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

//recuperar o formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$dataNasc = $_POST["dataNasc"];
$endereco = $_POST["endereco"];
$casa = $_POST["casa"];
$complemento = $_POST["complemento"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$confirmeEmail = $_POST["confirmeEmail"];
$senha = md5($_POST["senha"]);
$confirmeSenha = md5($_POST["confirmeSenha"]);

echo "1: "     ;
echo $nome        ;
echo "<br />"     ;
echo "2: "     ;
echo $dataNasc    ;
echo "<br />"     ;
echo "3: "     ;
echo $cpf         ;
echo "<br />"     ;
echo "4: "     ;
echo $sexo;
echo "<br />"     ;
echo "5: "     ;
echo $endereco    ;
echo "<br />"     ;
echo "6: "     ;
echo $casa        ;
echo "<br />"     ;
echo "7: "     ;
echo $complemento ;
echo "<br />"     ;
echo "8: "     ;
echo $cep         ;
echo "<br />"     ;
echo "9: "     ;
echo $telefone    ;
echo "<br />"     ;
echo "10: "     ;
echo $email       ;
echo "<br />"     ;
echo "11: "     ;
echo $senha       ;
echo "<br />"     ;




$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setNome($nome);
$usuarioDTO->setCpf($cpf);
$usuarioDTO->setSexo($sexo);
$usuarioDTO->setDataNasc($dataNasc);
$usuarioDTO->setEndereco($endereco);
$usuarioDTO->setCasa($casa);
$usuarioDTO->setComplemento($complemento);
$usuarioDTO->setCep($cep);
$usuarioDTO->setTelefone($telefone);

if ($email === $confirmeEmail) {
    $usuarioDTO->setEmail($email);
}

if ($senha === $confirmeSenha) {
    $usuarioDTO->setSenha($senha);
}


$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->salvar($usuarioDTO);
// exit();



if ($retorno) {
    $confirmacao = TRUE;
    echo "<script>";
    echo "windows.location.href = '../view/salvarCadastroUsuarioController.php?conf={$confirmacao}';";
    echo "<script>";
}
?>
