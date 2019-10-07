<?php
      require_once ('Pessoa.php');

      $p1 = new Pessoa('luiz','1996','222.222.222.22','1.72','82');

      $p1->calculaIMC();
      $p1->calculaIdade();
      $p1->validaCPF();
      
?>