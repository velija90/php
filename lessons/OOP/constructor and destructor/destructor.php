<?php
class fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct(){
        echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    }
}

$apple = new fruit('Apple','Red');
$apple1 = new fruit('Apple','Green');
$apple2 = new fruit('Apple','Yellow');
?>