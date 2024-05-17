<?php
class Produto {
    public $nome;
    public $preco;
    public $precodesconto;
    public $codigointerno;
    public $codigobarras;
    public $marca;
    public $quantidade;
    public $atividade;
    public $categoria;
    

    public function __construct($nome, $preco, $precodesconto, $codigointerno, $codigobarras, $marca, $atividade, $quantidade, $categoria) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->precodesconto = $precodesconto;
        $this->codigointerno = $codigointerno;
        $this->codigobarras = $codigobarras;
        $this->marca = $marca;
        $this->quantidade = $quantidade;
        $this->atividade = $atividade;
        $this->categoria = $categoria;
    }
}
?>
