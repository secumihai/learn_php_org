<?php
// TODO: Implement the Car class here
class Car{
    private $brand;
    private $age;

    public function __construct(string $brand, int $age){
        $this->brand=$brand;
        $this->age=$age;
    }

    public function print_details(){
        echo sprintf("This car is a %d %s.\n", $this->age, $this->brand);
    }

}
$car = new Car("Toyota", 2006);
$car->print_details();