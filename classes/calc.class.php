<?php
class Calc {

    function __construct($num, $num2) {
        $this->num = $num;
        $this->num2 = $num2;
    }

    function add($num1, $num2){
        return $num1 + $num2;
    }

    function subtract($num1, $num2){
        return $num1 - $num2;
    }

    function multiply($num1, $num2){
        return $num1 * $num2;
    }

    function divide($num1, $num2){
        return $num1 / $num2;
    }

    function exponent($num1, $num2){
        return pow($num1, $num2);
    }

    function squareroot($num1){
        return sqrt($num1);
    }

    function modulus($num1, $num2){
        return $num1 % $num2;
    }

}

?>