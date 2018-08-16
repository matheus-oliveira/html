<?php

/**
 *
 */
class PerfilDTO {

    private $id;
    private $perfil;
    private $descricao;

    public function getId() {
        return $this->id;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}

//fim classe
?>
