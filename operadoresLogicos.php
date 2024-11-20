<?php
class operadoresLogicos {
  
    public function operadores (){
        $numero_1 = 100;
        $numero_2 = 200;

        echo "operador <". $numero_1 < $numero_2?"verdadero":"falso";
    }
    public function saludar() {
        echo "Hola, buenas tardes estudiantes.";
    }
}