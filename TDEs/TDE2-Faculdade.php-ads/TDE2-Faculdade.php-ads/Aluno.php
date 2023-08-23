<?php
class Aluno{
  public $nome;
  public $matricula;
  public $semestre;

  public function exibirAluno(){
    echo "Aluno: ".$this->nome. "\nMatricula: ".$this->matricula. "\nSemestre: ".$this->semestre;
   
  }
}
