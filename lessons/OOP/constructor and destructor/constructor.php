<?php
class fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
       return $this->name;
    }
    function get_color(){
       return $this->color;
    }

}

$apple = new fruit('Apple','Red');
echo "Name: ".$apple->get_name();
echo "<br>";
echo "Color: ".$apple->get_color();

echo "<br>";

$apple1 = new fruit('Apple','Green');
echo "Name: ".$apple1->get_name();
echo "<br>";
echo "Color: ".$apple1->get_color();

echo "<br>";

$apple2 = new fruit('Apple','Yellow');
echo "Name: ".$apple2->get_name();
echo "<br>";
echo "Color: ".$apple2->get_color();
?>