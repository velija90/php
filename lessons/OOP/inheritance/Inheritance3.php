<?php
class fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){ // public function (default)
        echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    }

}
class Strawberry extends Fruit{
    public function message(){
        echo "Am I a Fruit or a Berry?";
        $this->intro();
    }
}

$strtawberry = new fruit("Strawberry","Red");
$strtawberry->message();