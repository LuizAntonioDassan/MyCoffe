<?php
class Carrinho {
    public $id;
    public $codigoProduto;
    public $precoFinal;

    public function __construct($id, $codigoProduto,$precoFinal) {
        $this->id = $id;
        $this->codigoProduto = $codigoProduto;
        $this->precoFinal = $precoFinal;
    }
}
?>
