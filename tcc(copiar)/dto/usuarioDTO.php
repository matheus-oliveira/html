<?php

/**
 *
 */
class UsuarioDTO {

    private $id;
    private $nome;
    private $sexo;
    private $dataNasc;
    private $cpf;
    private $endereco;
    private $casa;
    private $cep;
    private $complemento;
    private $telefone;
    private $email;
    private $senha;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCasa() {
        return $this->casa;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setCasa($casa) {
        $this->casa = $casa;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

}

?>
