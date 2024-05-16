<?php
class Cliente {
    public $id;
    public $RG;
    public $CPF;
    public $Dt_Nascimento;
    public $Endereco;

    public function __construct($RG, $CPF, $Dt_Nascimento, $Endereco, $id = null) {
        $this->id = $id;
        $this->RG = $RG;
        $this->CPF = $CPF;
        $this->Dt_Nascimento = $Dt_Nascimento;
        $this->Endereco = $Endereco;
    }
}
?>
