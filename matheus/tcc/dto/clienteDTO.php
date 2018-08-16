<?php
/**
 *
 */
require_once 'usuarioDTO.php';
class ClienteDTO extends UsuarioDTO

{
private $id;

public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}


}


 ?>
