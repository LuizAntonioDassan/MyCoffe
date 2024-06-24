<?php
class Produto {
    public $nome;
    public $preco;
    public $precodesconto;
    public $codigointerno;
    public $codigobarras;
    public $marca;
    public $quantidade;
    public $atividade;
    public $categoria;
    public $imagem;
    public $descricao;
    

    public function __construct($nome, $preco, $precodesconto, $codigointerno, $codigobarras, $marca, $atividade, $quantidade, $categoria, $descricao) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->precodesconto = $precodesconto;
        $this->codigointerno = $codigointerno;
        $this->codigobarras = $codigobarras;
        $this->marca = $marca;
        $this->atividade = $atividade;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
        $this->descricao = $descricao;
    } 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Get the value of precodesconto
     */ 
    public function getPrecodesconto()
    {
        return $this->precodesconto;
    }

    /**
     * Get the value of codigobarras
     */ 
    public function getCodigobarras()
    {
        return $this->codigobarras;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Get the value of atividade
     */ 
    public function getAtividade()
    {
        return $this->atividade;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Get the value of codigointerno
     */ 
    public function getCodigointerno()
    {
        return $this->codigointerno;
    }
}
?>
