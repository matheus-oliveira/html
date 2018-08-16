<?php

/**
 *
 */
class InsumoDTO {

    private $id;
    private $quantidade;
    private $preco;
    private $dataCompra;
    private $tipo;
    private $produto;

    public function getId() {
        return $this->id;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getDataCompra() {
        return $this->dataCompra;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setDataCompra($dataCompra) {
        $this->dataCompra = $dataCompra;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

}

//fim classe
?>
