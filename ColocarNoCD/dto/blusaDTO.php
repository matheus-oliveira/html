<?php

/**
 *
 */
class BlusaDTO {

    private $id;
    private $produto;
    private $cintura;
    private $comprimento;
    private $ombro;
    private $costa;
    private $busto;
    private $alturaBusto;
    private $manga;
    private $punho;

    public function getId() {
        return $this->id;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function getCintura() {
        return $this->cintura;
    }

    public function getComprimento() {
        return $this->comprimento;
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

    public function getManga() {
        return $this->manga;
    }

    public function getPunho() {
        return $this->punho;
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

    public function setComprimento($comprimento) {
        $this->comprimento = $comprimento;
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

    public function setManga($manga) {
        $this->manga = $manga;
    }

    public function setPunho($punho) {
        $this->punho = $punho;
    }

}

//fim classe
