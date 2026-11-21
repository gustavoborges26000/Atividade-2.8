<?php

class Contador {
   
    private static $total = 0;

    
    public function __construct() {
        self::$total++; // Incrementa a classe
    }

    
    public static function getTotal() {
        return self::$total;
    }
}

$obj1 = new Contador();
$obj2 = new Contador();
$obj3 = new Contador();

echo Contador::getTotal(); // Imprime 3 


?>