<?php
class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels()
    {
        echo "Wheels move";
    }
}
$bmw = new Car();
$merces_benz = new Car();

$bmw->MoveWheels();
$merces_benz->MoveWheels();
