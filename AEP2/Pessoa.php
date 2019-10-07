<?php
class Pessoa {

    public $nome;
    public $data_nascimento;
    public $peso;
    public $altura;
    public $cpf;
    public $cpfteste;

        public function __construct($nome,$data_nascimento,$cpf,$altura,$peso) {
        $this->nome = $nome;
				$this->data_nascimento = $data_nascimento;
				$this->cpf = $cpf;
				$this->altura = $altura;
				$this->peso = $peso;


    }
    public function calculaIMC() {
      $imc = ($this->peso / ($this->altura *$this->altura));
      if ($imc < 18.5) {
            echo "O seu IMC é: " . number_format($imc,2);
            echo "<br>Você está abaixo do peso!";
        } elseif (($imc > 18.5) && ($imc < 24.9)) {
            echo "<br>O seu IMC é: " . number_format($imc,2);
            echo "<br>Você está com o peso normal!";
        } else if (($imc > 25) && ($imc < 29.9)) {
            echo "<br>O seu IMC é: " . number_format($imc,2);
            echo "<br>Você está com sobrepeso!";
        } else if (($imc > 30) && ($imc < 34.9)) {
            echo "<br>O seu IMC é: ". number_format($imc,2);
            echo "<br>Você está com Obesidade grau 1!";
        } else if (($imc > 35) && ($imc < 39.9)) {
            echo "<br>O seu IMC é: " . number_format($imc,2);
            echo "<br>Você está com Obesidade grau 2!";
        } else if ($imc > 40) {
            echo "<br>O seu IMC é: " . number_format($imc,2);
            echo "<br>Você está com Obesidade grau 3!";
        }

    }

    public function calculaIdade() {
      $idade = (2019 - $this->data_nascimento);
      echo "<br>Idade: $idade anos";

    }
    public function validaCPF() {
      if (strlen($this->cpfteste) == 11)
      {
          setCpf();
      }
      else {
        echo "<br>CPF inválido";
      }

    }
    public function setCpf() {
       $this->cpf = $this->cpfteste;
    }

}
?>