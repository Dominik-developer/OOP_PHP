<?php

/**  
  all block of code may be shown as a error, it's because they shouldnt be in this same file
  they have educational purpose 
*/

//The $this keyword refers to the current object, and is only available inside methods. 


// 1. Inside the class (by adding a set_name() method and use $this):
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");


// 2. Outside the class (by directly changing the property value):
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";


// you can check result in 1. and 2. by this:
echo $apple->name;


// You can use the instanceof keyword to check if an object belongs to a specific class:
$apple = new Fruit();
var_dump($apple instanceof Fruit);
