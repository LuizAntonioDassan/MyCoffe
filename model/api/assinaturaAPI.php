<?php
class Assinatura {
    public $id;
    public $descricao;
    public $preco;
    public $duracao;

    public function __construct($descricao, $preco, $duracao, $id = null) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->duracao = $duracao;
    }
}
?>
