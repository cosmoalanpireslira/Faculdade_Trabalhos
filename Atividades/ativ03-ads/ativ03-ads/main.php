<?php

class Filme {
    private $titulo;
    private $diretor;
    private $genero;
    private $duracao;

    public function __construct($titulo, $diretor, $genero, $duracao) {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->genero = $genero;
        $this->duracao = $duracao;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getDiretor() {
        return $this->diretor;
    }

    public function setDiretor($diretor) {
        $this->diretor = $diretor;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }
}

class Sala {
    private $numero;
    private $capacidade;
    private $tipoTela;

    public function __construct($numero, $capacidade, $tipoTela) {
        $this->numero = $numero;
        $this->capacidade = $capacidade;
        $this->tipoTela = $tipoTela;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade) {
        $this->capacidade = $capacidade;
    }

    public function getTipoTela() {
        return $this->tipoTela;
    }

    public function setTipoTela($tipoTela) {
        $this->tipoTela = $tipoTela;
    }
}

class Ingresso {
    private $valor;
    private $tipoIngresso;
    private $horario;
    private $filme;
    private $sala;
    private $cliente;

    public function __construct($valor, $tipoIngresso, $horario, $filme, $sala, $cliente) {
        $this->valor = $valor;
        $this->tipoIngresso = $tipoIngresso;
        $this->horario = $horario;
        $this->filme = $filme;
        $this->sala = $sala;
        $this->cliente = $cliente;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getTipoIngresso() {
        return $this->tipoIngresso;
    }

    public function setTipoIngresso($tipoIngresso) {
        $this->tipoIngresso = $tipoIngresso;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function setHorario($horario) {
        $this->horario = $horario;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }

    public function getSala() {
        return $this->sala;
    }

    public function setSala($sala) {
        $this->sala = $sala;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function imprimirIngresso() {
        echo "==============================\n";
        echo "Filme: " . $this->filme->getTitulo() . "\n";
        echo "Horário: " . $this->horario . "\n";
        echo "Sala: " . $this->sala->getNumero() . "\n";
        echo "Tipo de Tela: " . $this->sala->getTipoTela() . "\n";
        echo "Valor: R$" . $this->valor . "\n";
        echo "Tipo de Ingresso: " . $this->tipoIngresso . "\n";
        echo "Cliente: " . $this->cliente->getNome() . "\n";
        echo "CPF: " . $this->cliente->getCpf() . "\n";
        echo "==============================\n";
    }
}
