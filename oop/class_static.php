<?php
class Car
{
    static $wheels = 4;
    var $hood = 1;
    function MoveWheels()
    {
        // echo "Wheels move";
        Car::$wheels = 10;
    }
}
$bmw = new Car();

// $bmw->wheels;

echo Car::$wheels;
