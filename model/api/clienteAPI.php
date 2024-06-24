<?php
class Cliente {
    public $id;
    public $RG;
    public $CPF;
    public $Dt_Nascimento;
    public $Endereco;
    public $email;
    public $nome;
    public function __construct($id, $email) {
        $this->id = $id;
        $this->email = $email;
    }

    public function cadastroCompleto($Dt_Nascimento, $RG, $CPF, $Endereco, $id, $email, $nome) {
        $this->id = $id;
        $this->RG = $RG;
        $this->CPF = $CPF;
        $this->Dt_Nascimento = $Dt_Nascimento;
        $this->Endereco = $Endereco;
        $this->email = $email;
        $this->nome = $nome;
    }
    
    public function visualizaCliente($id, $rg, $cpf, $email, $nome){
        $this->id = $id;
        $this->RG = $rg;
        $this->CPF = $cpf;
        $this->email = $email;
        $this->nome = $nome;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of RG
     */ 
    public function getRG()
    {
        return $this->RG;
    }

    /**
     * Get the value of CPF
     */ 
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Get the value of Dt_Nascimento
     */ 
    public function getDt_Nascimento()
    {
        return $this->Dt_Nascimento;
    }

    /**
     * Get the value of Endereco
     */ 
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }
}
?>
