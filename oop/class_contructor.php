<?php

use Car as GlobalCar;

class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels()
    {
        // echo "Wheels move";
        $this->wheels = 10;
    }
    function CreateDoors()
    {
        $this->doors = 6;
    }
    function __construct()
    {
        echo $this->wheels = 10;
    }
}
$bmw = new Car();
$truck = new Car();
$semi = new Car();

// echo $bmw->wheels . "<br>";
// echo $truck->wheels . "<br>";

// $truck->CreateDoors();
// echo $truck->doors;

class Plane extends Car
{
    var $wheels = 20;
}

// $jet = new Plane();
// echo $jet->wheels;
// $jet->MoveWheels();
// echo $jet->wheels;


// if(class_exists("Plane")){
//     echo " it does";
// }
