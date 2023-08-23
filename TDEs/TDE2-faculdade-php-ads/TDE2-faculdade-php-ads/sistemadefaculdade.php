<?php

// Definição da classe Aluno
class Aluno {
  public $nome; // Propriedade pública para o nome do aluno
  public $matricula; // Propriedade pública para a matrícula do aluno

  // Construtor da classe Aluno
  public function __construct($nome, $matricula) {
    $this->nome = $nome;
    $this->matricula = $matricula;
  }

  // Método público para exibir informações do aluno
  public function exibirAluno() {
    echo "Nome: " . $this->nome . ", Matrícula: " . $this->matricula . "<br>";
  }
}

// Definição da classe Professor
class Professor {
  public $nome; // Propriedade pública para o nome do professor
  public $disciplina; // Propriedade pública para a disciplina do professor

  // Construtor da classe Professor
  public function __construct($nome, $disciplina) {
    $this->nome = $nome;
    $this->disciplina = $disciplina;
  }

  // Método público para exibir informações do professor
  public function exibirProfessor() {
    echo "Nome: " . $this->nome . ", Disciplina: " . $this->disciplina . "<br>";
  }
}

// Definição da classe Semestre
class Semestre {
  public $nome; // Propriedade pública para o nome do semestre
  public $alunos = array(); // Propriedade pública para um array de alunos
  public $professor; // Propriedade pública para o professor do semestre

  // Construtor da classe Semestre
  public function __construct($nome, $professor) {
    $this->nome = $nome;
    $this->professor = $professor;
  }

  // Método público para adicionar um aluno ao semestre
  public function adicionarAluno($aluno) {
    $this->alunos[] = $aluno;
  }

  // Método público para exibir informações do semestre
  public function exibirSemestre() {
    echo "Nome do Semestre: " . $this->nome . "<br>";
    echo "Professor do Semestre: " . $this->professor->nome . "<br>";
    echo "Disciplina do Semestre: " . $this->professor->disciplina . "<br>";
    echo "Alunos do Semestre: <br>";
    foreach ($this->alunos as $aluno) {
      echo "- " . $aluno->nome . "<br>";
    }
  }
}

// Criação de objetos Aluno
$aluno1 = new Aluno("João", "123456");
$aluno2 = new Aluno("Maria", "789012");

// Criação de objeto Professor
$professor1 = new Professor("José", "Matemática");

// Criação de objeto Semestre
$semestre1 = new Semestre("1º Semestre", $professor1);

// Adicionando alunos ao semestre
$semestre1->adicionarAluno($aluno1);
$semestre1->adicionarAluno($aluno2);

// Exibindo informações do semestre
$semestre1->exibirSemestre();

?>
