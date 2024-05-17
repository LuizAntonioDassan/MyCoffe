<?php
class Administrador {
    public $cargo;
    public $id;

    public function __construct($id,$cargo) {
        $this->id = $id;
        $this->cargo = $cargo;
    }
}
?>
