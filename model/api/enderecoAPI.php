<?php

class Endereco {
    private $cpfCliente;
    private $cep;
    private $rua;
    private $bairro;
    private $cidade;
    private $numero;

    public function __construct($cpfCliente, $cep, $rua, $bairro, $cidade, $numero) {
        $this->cpfCliente = $cpfCliente;
        $this->cep = $cep;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->numero = $numero;
    }

    // Getters
    public function getCpfCliente() {
        return $this->cpfCliente;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getNumero() {
        return $this->numero;
    }

    // Setters
    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
}
?>
