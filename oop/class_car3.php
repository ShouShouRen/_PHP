<?php
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
}
$bmw = new Car();
// $merces_benz = new Car();
$truck = new Car();


// $bmw->MoveWheels();
// $merces_benz->MoveWheels();
echo $bmw->wheels . "<br>";
echo $truck->wheels = 10 . "<br>";

$truck->CreateDoors();
echo $truck->doors;
