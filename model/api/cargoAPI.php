<?php
class Cargo {
    public $id;
    public $nome;
    public $permissao;

    public function __construct($nome, $permissao, $id = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->permissao = $permissao;
    }
}
?>
