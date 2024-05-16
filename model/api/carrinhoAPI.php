<?php
class Carrinho {
    public $id;
    public $cliente_RG;

    public function __construct($cliente_RG, $id = null) {
        $this->id = $id;
        $this->cliente_RG = $cliente_RG;
    }
}
?>
