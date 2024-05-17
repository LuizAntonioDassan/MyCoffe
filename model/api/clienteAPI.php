<?php
class Cliente {
    public $id;
    public $RG;
    public $CPF;
    public $Dt_Nascimento;
    public $Endereco;

    public function __construct($Dt_Nascimento, $RG, $CPF, $Endereco, $id) {
        $this->id = $id;
        $this->RG = $RG;
        $this->CPF = $CPF;
        $this->Dt_Nascimento = $Dt_Nascimento;
        $this->Endereco = $Endereco;
    }
}
?>
