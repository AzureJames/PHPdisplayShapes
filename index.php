<?php
class Shape {

    var $pi = 3.14159;
    // function displayAscii(){}
    // function display(){}
}



class Rectangle extends Shape {
    var $height = 1;
    var $width = 1;

    function __construct($height, $width, $char, $color) {
        $this->height = $height;
        $this->width = $width;
        $this->char = $char;
        $this->color = $color;
    }

    function displayAscii(){
        for($i = 0; $i < $this->height/8; $i++){
            echo "<p style=\"margin: 0; line-height: .9; color:".$this->color.";   \">";
                for($j = 0; $j < $this->width/6; $j++){
                    echo $this->char;
                }
            echo "</p>";
        }
    }

    function display(){
            echo "<div style=\"
            background-color:".$this->color.";
            width:".$this->width."px;
            height:".$this->height."px;
            \">";
            echo "</div>";
        }
}


// $square = new Rectangle(120,110,"#", "red");
// $square->displayAscii();
// $square->display();








class Sphere extends Shape {
    var $color;
    function __construct($radius, $char, $colors) {
        $this->color = $colors;
        $this->radius = $radius;
        $this->volume = pow(
            (4/3) * $this->pi * $this->radius
            , 3); 
        $this->surfaceArea = pow(
        4 * $this->pi * $this->radius 
        , 2);
        $this->char = $char;
    }

    function displayAscii(){
        echo "<div style=\"border-radius: 100%; overflow: hidden;     width: fit-content;\">";
        for($i = 0; $i < $this->radius/8; $i++){ //row
            echo "<p style=\"margin: 0; line-height: .9; color:".$this->color.";   \">";
                for($j = 0; $j < $this->radius/8; $j++){ //chars
                    echo $this->char;
                }
            echo "</p>";
        }
        echo "</div>";
    }

   // row1 ->   for width/2-1 space, char, for width/2-1 space           row4-> 0space ,  width char,  0 space


    function display(){
            echo "<div style=\"
            width:".$this->radius."px;
            height:".$this->radius."px;
            background-color: " . $this->color . ";
            border-radius: 100%;
            \">";
            echo "</div>";
        }

}



?>