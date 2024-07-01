<?php
class Cliente {
    public $id;
    public $RG;
    public $CPF;
    public $Dt_Nascimento;
    public $email;
    public $nome;
    public $imagem;
    public function __construct($id, $email) {
        $this->id = $id;
        $this->email = $email;
    }

    public function cadastroCompleto($Dt_Nascimento, $RG, $CPF, $id, $email, $nome) {
        $this->id = $id;
        $this->RG = $RG;
        $this->CPF = $CPF;
        $this->Dt_Nascimento = $Dt_Nascimento;
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

    /**
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @return  self
     */ 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }
}
?>
