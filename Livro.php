<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //put your code here
    
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //metodos
    
    public function detalhes()
    {
        echo "<br/>----------------------------------------------<br/>";
        echo "<br/>Livro -" . $this->titulo . "- escrito por " . $this->autor;
        echo "<br/> Páginas: " . $this->totPaginas;
        echo "<br/> Sendo lido por " . $this->leitor->getNome();
        echo "<br/>----------------------------------------------<br/>";
    }
    
    //construtor
    
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }
       
    //getters e setters
    
    public function getTitulo() 
    {
        return $this->titulo;
    }

    public function getAutor() 
    {
        return $this->autor;
    }

    public function getTotPaginas() 
    {
        return $this->totPaginas;
    }

    public function getPagAtual() 
    {
        return $this->pagAtual;
    }

    public function getAberto() 
    {
        return $this->aberto;
    }

    public function getLeitor() 
    {
        return $this->leitor;
    }

    public function setTitulo($titulo): void 
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void 
    {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void 
    {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void 
    {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void 
    {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void 
    {
        $this->leitor = $leitor;
    }
    
    //metodos abstracts

    public function abrir() 
    {
        $this->setAberto();
    }

    public function avancarPag() 
    {
        if($this->getAberto())
        {
            $this->setPagAtual($this->getPagAtual()+1);
        }
    }

    public function fechar() 
    {
        $this->setAberto(false);
    }

    public function folhear($p) 
    {
        if($p > $this->getTotPaginas())
        {
            $this->setPagAtual(0);                       
        }
        else
        {
            $this->setPagAtual($p);
        }
    }

    public function voltarPag() 
    {
        if($this->getAberto() && $this->getPagAtual() > 0)
        {
            $this->setPagAtual($this->getPagAtual()-1);
        }        
    }

}
