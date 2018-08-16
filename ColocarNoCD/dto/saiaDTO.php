<?php

/**
 *
 */
class SaiaDTO {

    private $id;
    private $produto;
    private $cintura;
    private $alturaQuadril;
    private $quadril;
    private $comprimento;

    public function getId() {
        return $this->id;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function getCintura() {
        return $this->cintura;
    }

    public function getAlturaQuadril() {
        return $this->alturaQuadril;
    }

    public function getQuadril() {
        return $this->quadril;
    }

    public function getComprimento() {
        return $this->comprimento;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

    public function setCintura($cintura) {
        $this->cintura = $cintura;
    }

    public function setAlturaQuadril($alturaQuadril) {
        $this->alturaQuadril = $alturaQuadril;
    }

    public function setQuadril($quadril) {
        $this->quadril = $quadril;
    }

    public function setComprimento($comprimento) {
        $this->comprimento = $comprimento;
    }

}

//fim classe
