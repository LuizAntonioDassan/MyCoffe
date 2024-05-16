<?php
class Categoria {
    public $id;
    public $nome;

    public function __construct($nome, $id = null) {
        $this->id = $id;
        $this->nome = $nome;
    }
}
?>
