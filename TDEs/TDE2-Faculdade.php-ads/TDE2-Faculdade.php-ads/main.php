<?php
require_once 'Aluno.php';
require_once 'Curso.php';
require_once 'Professor.php';

$aluno_1 = new Aluno;
$aluno_1->nome = 'Maria';
$aluno_1->matricula = '20230001';
$aluno_1->semestre = 'Terceiro';
$aluno_1->exibirAluno(); // Chama o metodo exibir Aluno

$prof_1 = new Professor;
$prof_1->nome = 'José';
$prof_1->disciplina = 'Programação';
$prof_1->exibirProfessor(); // Chama o metodo exibir Professor

$curso_1 = new Curso;
$curso_1->nome = 'Sistemas de Informação';
$curso_1->turno = 'Noite';
$curso_1->exibirCurso(); // Chama o metodo exibir Curso


