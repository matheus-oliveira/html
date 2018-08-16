<?php
exit();


require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';

//recuperar o formulario

$nome           = $_POST["nome"];
$cpf            = $_POST["cpf"];
$sexo           = $_POST["sexo"];
$dataNasc       = $_POST["dataNasc"];
$endereco       = $_POST["endereco"];
$casa           = $_POST["casa"];
$complemento    = $_POST["complemento"];
$cep            = $_POST["cep"];
$telefone       = $_POST["telefone"];
$email          = $_POST["email"];
$confirmeEmail  = $_POST["confirmeEmail"];
$senha          = md5($_POST["senha"]);
$confirmeSenha  = md5($_POST["confirmeSenha"]);

echo "Cadastrado com sucesso!!!";

/*
if ($email === $confirmeEmail) {
  echo $email;
}
else {
  echo 'senha incorreta';
}
echo "<br/>";
if ($senha === $confirmeSenha) {
  echo $senha;
}
else {
  echo 'senha incorreta';
}

*/

$clienteDTO = new ClienteDTO();

$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setSexo($sexo);
$clienteDTO->setDataNasc($dataNasc);
$clienteDTO->setEndereco($endereco);
$clienteDTO->setCasa($casa);
$clienteDTO->setComplemento($complemento);
$clienteDTO->setCep($cep);
$clienteDTO->setTelefone($telefone);
/*
if ($email == $confirmeEmail) {
  $clienteDTO->setEmail($email);
}

if ($senha == $confirmeSenha) {
  $clienteDTO->setSenha($senha);
}
*/

$clienteDAO = new ClienteDAO();
$retorno = $clienteDAO->salvar($clienteDTO);


 ?>
