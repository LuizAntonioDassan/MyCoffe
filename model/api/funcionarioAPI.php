<?php
class Funcionario {
    public $email;
    public $cargo_id;

    public function __construct($email, $cargo_id) {
        $this->email = $email;
        $this->cargo_id = $cargo_id;
    }
}
?>
