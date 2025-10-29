<?php
    class calculadora{
        public $numero01;
        public $numero02;

        public function __construct($numero01,$numero02){
            $this->numero01 = $numero01;
            $this->numero02 = $numero02;
        }
        public function somaNumeros(){
            echo("$this->numero01 + $this->numero02 = ".$this->numero01 + $this->numero02);
        }
        public function subtracao(){
            echo nl2br("\n$this->numero01 - $this->numero02 = ".$this->numero01 - $this->numero02."\n");
        }
        public function multiplicacao(){
            echo("$this->numero01 . $this->numero02 = ".$this->numero01 * $this->numero02);
        }
        public function divisao(){
            echo nl2br("\n$this->numero01 / $this->numero02 = ".$this->numero01 / $this->numero02);
        }
    }
   
?>