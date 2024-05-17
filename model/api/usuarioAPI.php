<?php
class Usuario {
    public $email;
    public $senha;
    public $nome;
    public $foto;

    public function __construct($email, $senha, $nome, ) {
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
        
    }
}
?>
