<?php
class ClienteDTO {

    private $id;
    private $nome;
    private $rg;
    private $cpf;
    private $datanascimento;
    private $endereco;
    private $estado;
    private $cidade;
    
    private $email;
    private $senha;
    private $perfil;
    
    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getDatanascimento() {
        return $this->datanascimento;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

}
