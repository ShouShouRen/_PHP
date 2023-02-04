<?php
class Dog
{
    var $eyeColors = "Blue";
    var $noseColors = "wide";
    var $furColors = "brown";
    function ShowAll()
    {
        echo $this->eyeColors . "<br>";
        echo $this->noseColors . "<br>";
        echo $this->furColors . "<br>";
    }
}
$pitbull = new Dog();

$pitbull->ShowAll();