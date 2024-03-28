<?php

//Parent Class
abstract class Car {
    Public $name;

    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends Car{
    public function intro() : string {
        return "Choose German quality. I'm an $this->name!";
    }
}

class Citroen extends Car{
    public function intro() : string {
        return "French extravagance. I'm an $this->name!";
    }
}

class Volvo extends Car{
    public function intro() : string {
        return "Proud to be Swedish. I'm an $this->name!";
    }
}
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
echo "<br>";

$volvo = new volvo("volvo");
echo $volvo->intro();
echo "<br>";