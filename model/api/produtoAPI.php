<?php
class Produto {
    public $codigo_barras;
    public $descricao;
    public $preco;
    public $quantidade;
    public $marca;

    public function __construct($codigo_barras, $descricao, $preco, $quantidade, $marca) {
        $this->codigo_barras = $codigo_barras;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->marca = $marca;
    }
}
?>
