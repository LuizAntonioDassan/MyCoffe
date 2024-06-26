<?php
class Carrinho {
    public $id;
    public $codigoProduto;
    public $precoFinal;
    public $quantidade;

    public function __construct($id, $codigoProduto,$precoFinal, $quantidade) {
        $this->id = $id;
        $this->codigoProduto = $codigoProduto;
        $this->precoFinal = $precoFinal;
        $this->quantidade = $quantidade;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of codigoProduto
     */ 
    public function getCodigoProduto()
    {
        return $this->codigoProduto;
    }

    /**
     * Set the value of codigoProduto
     *
     * @return  self
     */ 
    public function setCodigoProduto($codigoProduto)
    {
        $this->codigoProduto = $codigoProduto;

        return $this;
    }

    /**
     * Get the value of precoFinal
     */ 
    public function getPrecoFinal()
    {
        return $this->precoFinal;
    }

    /**
     * Set the value of precoFinal
     *
     * @return  self
     */ 
    public function setPrecoFinal($precoFinal)
    {
        $this->precoFinal = $precoFinal;

        return $this;
    }

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }
}
?>
