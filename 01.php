<?php

/**  in OOP:
    variables are called properies!
    functions are called methods!
*/
// Classes are nothing without objects!

// We can create multiple objects from a class.
// Each object has all the properties and methods defined in the class, but they will have different property values.


class Car { // define name of class
    // code goes here

    public $brand; // declare public Property
    public $color;

    // methods
    function setBrand($brand) {

        $this->brand = $brand;
    }

    function get_brand() {
        return $this->brand;
    }

    function setColor($color) {
        
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

// Objects of a class are created using the new keyword.

$porshe = new Car();

$porshe->setBrand('Porshe');
$porshe->setColor('Black');


?>

<!DOCTYPE html>
<html>
<body>

<?php
    echo 'Brand: '.$porshe->get_brand();
    echo '<br>';
    echo 'Color: '.$porshe->get_color();

?>

</body>
</html>