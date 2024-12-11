<?php

/*

    Properties and methods can have access modifiers which control where they can be accessed.

*    There are three access modifiers:

    1) public - the property or method can be accessed from everywhere. This is default
    2) protected - the property or method can be accessed within the class and by classes derived from that class
    3) private - the property or method can ONLY be accessed within the class
*/

/*
class phone {

    public $brand;
    protected $color;
    private $price;
}

$PHONE = new phone();

$PHONE->$brand = 'telephone'; // OK
$PHONE->$color = 'black'; // ERROR
$PHONE->$price = '1500'; // ERROR
*/

// * you cant access private and protected variables 





/** 
    In the next example we have added access modifiers to two functions. Here, if you try to call the set_color() or the set_weight() function it will result in a fatal error (because the two functions are considered protected and private), even if all the properties are public:
*/


class phone {

    public $brand;
    protected $color;
    private $price;

    function set_brand($n){ // public function
        $this->brand = $n;
    }

    protected function set_color($n) { // protected function
        $this->color = $n;
    }

    private function set_price($n) { // private function 
        $this->price = $n;
    }

}

$PHONE = new phone();

$PHONE->set_brand('phoneBrand'); // ok
//$PHONE->set_color('phoneColor'); //error
//PHONE->set_price('phonePrice'); // error


