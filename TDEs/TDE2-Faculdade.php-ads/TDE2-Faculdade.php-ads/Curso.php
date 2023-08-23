<?php
class Curso{
  public $nome;
  public $turno;

  
  public function exibirCurso(){
    echo "\nCurso: ".$this->nome. "\nTurno: ".$this->turno;
  }
}
