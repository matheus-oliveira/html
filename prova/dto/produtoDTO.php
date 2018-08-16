<?php

/**
 *
 */
class ProdutoDTO {

    private $id;
    private $nome;
    private $quantidade;
    private $fabricante;
    private $dataCadastro;
    private $preco;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getFabricante() {
        return $this->fabricante;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getPreco() {
        return $this->preco;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

}

//fim classe
