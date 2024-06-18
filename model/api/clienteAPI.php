<?php
class Cliente {
    public $id;
    public $RG;
    public $CPF;
    public $Dt_Nascimento;
    public $Endereco;
    public $email;
    public function __construct($id, $email) {
        $this->id = $id;
        $this->email = $email;
    }

    public function cadastroCompleto($Dt_Nascimento, $RG, $CPF, $Endereco, $id, $email) {
        $this->id = $id;
        $this->RG = $RG;
        $this->CPF = $CPF;
        $this->Dt_Nascimento = $Dt_Nascimento;
        $this->Endereco = $Endereco;
        $this->email = $email;
    }


}
?>
