<?php

class Car{
    public string $brand;
    public string $color;
    public float $engine_size;
    public bool $new;

    public function start(){
        //you would like to say the car with specific brand is starting

        return "The $this->brand car is starting!";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = 1;
$myCar->engine_size = 3.5;

echo $myCar->start();
?>