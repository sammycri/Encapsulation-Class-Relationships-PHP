<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'Pessoa.php';  
           require_once 'Livro.php';
           
           $p[0] = new Pessoa("Pedro", 22, "M");
           $p[1] = new Pessoa("Maria", 31, "F");
           
           $l[0] = new Livro("PHP Básico", "José Pepino", 300, $p[0]);
           $l[1] = new Livro("POO com PHP", "Fernanda da Silva", 500, $p[1]);
           $l[2] = new Livro("PHP Avançado", "Claudin", 450, $p[1]);
           
           $l[0]->detalhes(); 
           $l[1]->detalhes();     
           $l[2]->detalhes();     
               
       
        ?>
        </pre>
    </body>
</html>
