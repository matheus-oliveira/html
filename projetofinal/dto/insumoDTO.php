<?php
  /**
   *
   */
  class InsumoDTO
  {
    private $id;
    private $quantidade;
    private $preco;
    private $dataCompra;
    private $material;

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

    public function getMaterial() {
        return $this->material;
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

    public function setMaterial($material) {
        $this->material = $material;
    }

  }//fim classe

 ?>
