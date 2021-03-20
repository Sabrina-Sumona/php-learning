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
    // public $wheels;
    protected $wheels;
    // private $wheels;
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

// inheritance 
class Motorcycle1 extends Vehicle{
    public $capacity;
    public function Motorcapacity ($capacity){
        echo "The capacity of this motorcycle is $capacity".'<br>';
    }

}

$honda= new Motorcycle1();
$honda->wheels=2;
$honda->capacity='100cc';
print_r($honda);
echo '<br>';
$honda->vehicleName('hornet');

// Encapsulation
// Access Modifiers : public, protected, private
// public access modifiers is used to access the class variable/function from everywhere
// protected access modifiers is used to access the class variable/function within that class or it's derived class
// private access modifiers is used to access the class variable/function within that class only

class Motorcycle2 extends Vehicle2{
    public $capacity;
    public function Motorcapacity2 ($capacity){
        echo "The capacity of this motorcycle is $capacity".'<br>';
    }
    public function display(){
        echo "The wheels of this motorcycle are $this->wheels".'<br>';
    }
}

$honda= new Motorcycle2(2);
$honda->capacity='100cc';
print_r($honda);
echo '<br>';
$honda->vehicleName2('hornet');
$honda->display();

// Polymorphism
class Motorcycle extends Vehicle2{
    public function display(){
        echo "The wheels of this motorcycle are $this->wheels".'<br>';
    }
}
class Car extends Vehicle2{
    public function display(){
        echo "The wheels of this car are $this->wheels".'<br>';
    }
}
class Bus extends Vehicle2{
    public function display(){
        echo "The wheels of this bus are $this->wheels".'<br>';
    }
}
$honda= new Motorcycle(2);
$honda->display();
$car= new Car(4);
$car->display();
$bus= new Bus(6);
$bus->display();

// interface
interface Vehicle3{
    public function display();
}
class Motorcycle3 implements Vehicle3{
    public $wheels;
    public function __construct($wheel)
    {
        $this->wheels= $wheel;
    }
    public function display(){
        echo "The wheels of this motorcycle are $this->wheels".'<br>';
    }
}
class Car3 implements Vehicle3{
    public $wheels;
    public function __construct($wheel)
    {
        $this->wheels= $wheel;
    }
    public function display(){
        echo "The wheels of this car are $this->wheels".'<br>';
    }
}
class Bus3 implements Vehicle3{
    public $wheels;
    public function __construct($wheel)
    {
        $this->wheels= $wheel;
    }
    public function display(){
        echo "The wheels of this bus are $this->wheels".'<br>';
    }
}
function showValue(Vehicle3 $v){
        $v->display();
    }
$honda= new Motorcycle3(2);
showValue($honda);
// $honda->display();
$car= new Car3(4);
showValue($car);
// $car->display();
$bus= new Bus3(6);
showValue($bus);
// $bus->display();

// Abstraction
// we can't create any objects of abstract class
// we only can extend/ inherit the abstract class
abstract class Vehicle4{
    public $wheels;
    public function vehicleName($name){
        echo "The name of this vehicle is $name";
        echo '<br>';
    }
}
class Car4 extends Vehicle4{
}

$v= new Car4;
$v->vehicleName('car');

abstract class Vehicle5{
    public $wheels;
    public function vehicleName($name){
        echo "The name of this vehicle is $name";
        echo '<br>';
    }
    abstract function showName();
}
// the child class must contain the definition of the abstract class's abstract function
class Car5 extends Vehicle5{
    public function showName()
    {
        echo 'Function Called';
        echo '<br>';
    }
}

$v= new Car5;
$v->vehicleName('car');
$v-> showName();
?>