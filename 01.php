<?php

/*

    A destructor is called when the object is destructed or the script is stopped or exited.

    If you create a __destruct() function, PHP will automatically call this function at the end of the script.
*/
/** 
  Notice that the destruct function starts with two underscores (__)!

*/
/*
    The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:

*/

class laptop {

    public $brand;
    public $model;


    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    function __destruct() {
        echo "This is {$this->brand} laptop, {$this->model} model";
    }
}

$laptop = new laptop('laptopBrand', 'laptopModel');