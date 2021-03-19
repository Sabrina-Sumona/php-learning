<?php
// OOP in php
// OOP is used to handling larger programs
// benefits : DRY(don't repeat yourself) coding & reuse segments, faster & easier, give a proper structure of the code

// class & object
// class name starts with uppercase letter
class Vehicle{
    public $wheels;

    public function vehicleName($name){
        echo "The name of this vehicle is $name".'<br>';
    }
}

$car= new Vehicle();
$car->wheels= 4;
print_r($car);
echo '<br>';
$car->vehicleName('car');

$bus= new Vehicle();
$bus->wheels= 6;
print_r($bus);
echo '<br>';
$bus->vehicleName('bus');

// constructors & destructors

class Vehicle2{
    public $wheels;
    public function __construct($wheel)
    {
        $this->wheels= $wheel;
    }
    public function vehicleName2($name){
        echo "The name of this vehicle is $name".'<br>';
    }
    public function __destruct(){

    }
}

$car= new Vehicle2(4);
// $car->wheels= 4;
print_r($car);
echo '<br>';
$car->vehicleName2('car');

$bus= new Vehicle2(6);
// $bus->wheels= 6;
print_r($bus);
echo '<br>';
$bus->vehicleName2('bus');

// class Vehicle{
//     public $wheels;

//     public function vehicleName($name){
//         echo "The name of this vehicle is $name";
//     }
// }
// class Motorcycle extends Vehicle{
//     public $weight;

// }

// $honda= new Motorcycle();
// //echo $honda->vehicleName('hornet');
// $honda->wheels=4;
// echo $honda->wheels;

// class Vehicle{
//     protected $wheels;
//     public function __construct($wheel){
//         $this->wheels= $wheel;
//     }
//     public function vehicleName($name){
//         echo "The name of this vehicle is $name";
//     }
// }
// class Motorcycle extends Vehicle{
//     public $weight;
//     public function display(){
//         echo $this->wheels;
//     }
// }

// $honda= new Motorcycle('2');
// //echo $honda->vehicleName('hornet');
// //$honda->wheels=4;
// $honda->display();

// interface Vehicle{
//     public function vehicleWheel();
// }
// class Motorcycle implements Vehicle{
//     public $wheels;
//     public function __construct($wheel){
//         $this->wheels=$wheel;
//     }
//     public function vehicleWheel(){
//         echo "Number of wheels of motorcycle is $this->wheels";
//     }
// }

// class Car  implements Vehicle{
//     public $wheels;
//     public function __construct($wheel){
//         $this->wheels=$wheel;
//     }
//     public function vehicleWheel(){
//         echo "Number of wheels of car is $this->wheels";
//     }
// }

// class Bus  implements Vehicle{
//     public $wheels;
//     public function __construct($wheel){
//         $this->wheels=$wheel;
//     }
//     public function vehicleWheel(){
//         echo "Number of wheels of bus is $this->wheels";
//     }
// }

// function showValue(Vehicle $v){
//     $v->vehicleWheel();
// }

// $showWheels= new Car('4');
// showValue($showWheels);

// abstract class Vehicle{
//     public $wheels;

//     public function vehicleName($name){
//         echo "The name of this vehicle is $name";
//     }

//     abstract function showName();
// }

// class Car extends Vehicle{
//     public function showName()
//     {
//         echo 'Function Called';
//     }
// }

// $v= new Car;
// $v->vehicleName('car');
// $v-> showName();
?>