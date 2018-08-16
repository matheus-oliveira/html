<?php

/**
 *
 */
class VestidoDTO {

    private $id;
    private $produto;
    private $ombro;
    private $costa;
    private $busto;
    private $cintura;
    private $alturaBusto;
    private $alturaCintura;
    private $quadril;
    private $alturaQuadril;
    private $comprimento;

    public function getId() {
        return $this->id;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function getOmbro() {
        return $this->ombro;
    }

    public function getCosta() {
        return $this->costa;
    }

    public function getBusto() {
        return $this->busto;
    }

    public function getAlturaBusto() {
        return $this->alturaBusto;
    }

    public function getAlturaCintura() {
        return $this->alturaCintura;
    }

    public function getCintura() {
        return $this->cintura;
    }

    public function getQuadril() {
        return $this->quadril;
    }

    public function getAlturaQuadril() {
        return $this->alturaQuadril;
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

    public function setOmbro($ombro) {
        $this->ombro = $ombro;
    }

    public function setCosta($costa) {
        $this->costa = $costa;
    }

    public function setBusto($busto) {
        $this->busto = $busto;
    }

    public function setAlturaBusto($alturaBusto) {
        $this->alturaBusto = $alturaBusto;
    }

    public function setAlturaCintura($alturaCintura) {
        $this->alturaCintura = $alturaCintura;
    }

    public function setCintura($cintura) {
        $this->cintura = $cintura;
    }

    public function setQuadril($quadril) {
        $this->quadril = $quadril;
    }

    public function setAlturaQuadril($alturaQuadril) {
        $this->alturaQuadril = $alturaQuadril;
    }

    public function setComprimento($comprimento) {
        $this->comprimento = $comprimento;
    }

}

//fim classe
