<?php

// A constructor allows you to initialize an object's properties upon creation of the object.

// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

/**
 Notice that the construct function starts with two underscores (__)
*/

// example #1
class Fruit {
    
    public $name;
    public $color;

    function __construct($name){

        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$apple = new Fruit('Apple');

echo $apple->get_name();



// example #2
class Car {

    public $brand;
    public $color;

    function __construct($brand, $color) {
        
        $this->brand = $brand;
        $this->color = $color;
    }

    function get_brand() {
        return $this->brand;
    }

    function get_color() {
        return $this->color;
    }
}


$suv = new Car("brander","red");

echo $suv->get_brand();
echo '<br>';
echo $suv->get_color();