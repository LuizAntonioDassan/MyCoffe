<?php
class Assinatura {
    public $id;
    public $descricao;
    public $preco;
    public $precoDesconto;
    public $ativo;

    public function __construct($ativo, $id, $descricao, $preco, $precoDesconto) {
        $this->ativo = $ativo;
        $this->id = $id;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->precoDesconto = $precoDesconto;
    }
}
?>
