<?php
class Compra {
    public $identificador;
    public $data;
    public $cliente_id;

    public function __construct($data, $cliente_id, $identificador) {
        $this->identificador = $identificador;
        $this->data = $data;
        $this->cliente_id = $cliente_id;
    }
}
?>
