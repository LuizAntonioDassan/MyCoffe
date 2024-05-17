<?php
class Cargo {
    public $id;
    public $nome;
    public $permissao;

    public function __construct($id, $nome, $permissao) {
        $this->id = $id;
        $this->nome = $nome;
        $this->permissao = $permissao;
    }
}
?>
