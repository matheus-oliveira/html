<?php
/**
 *
 */
 require_once 'usuarioDTO.php';

class FuncionarioDTO extends UsuarioDTO{
  private $dataAdmicao;
  private $salario;
  private $cargo;
  private $funcao;
  private $cargaHoraria;
  private $horaEntrada;
  private $horaSaida;

  public function getDataAdmicao() {
      return $this->dataAdmicao;
  }

  public function getSalario() {
      return $this->salario;
  }

  public function getCargo() {
      return $this->cargo;
  }

  public function getFuncao() {
      return $this->funcao;
  }

  public function getCargaHoraria() {
      return $this->cargaHoraria;
  }

  public function getHoraEntrada() {
      return $this->horaEntrada;
  }

  public function getHoraSaida() {
      return $this->horaSaida;
  }

  public function setDataAdmicao($dataAdmicao) {
      $this->dataAdmicao = $dataAdmicao;
  }

  public function setSalario($salario) {
      $this->salario = $salario;
  }

  public function setCargo($cargo) {
      $this->cargo = $cargo;
  }

  public function setFuncao($funcao) {
      $this->funcao = $funcao;
  }

  public function setCargaHoraria($cargaHoraria) {
      $this->cargaHoraria = $cargaHoraria;
  }

  public function setHoraEntrada($horaEntrada) {
      $this->horaEntrada = $horaEntrada;
  }

  public function setHoraSaida($horaSaida) {
      $this->horaSaida = $horaSaida;
  }

}//fim classe
