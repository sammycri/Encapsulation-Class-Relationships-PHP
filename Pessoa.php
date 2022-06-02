<?php

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    //metodos
    
    public function fazerNiver()
    {
        $this->setIdade($this->getIdade() + 1);
    }
    
    //Construtor
     
    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    
    //Getters and Setters
    public function getNome() 
    {
        return $this->nome;
    }

    public function getIdade() 
    {
        return $this->idade;
    }

    public function getSexo() 
    {
        return $this->sexo;
    }

    public function setNome($nome): void 
    {
        $this->nome = $nome;
    }

    public function setIdade($idade): void 
    {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void 
    {
        $this->sexo = $sexo;
    }


}
