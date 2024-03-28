<?php

class fruit {

    public $name;
    public $color;
    public $weight;

    public function set_name($n){ // public function (default)
        $this->name = $n;
    }

    protected function set_color($n){ // a protected function 
        $this->color = $n;
    }

    private function set_weight($n){ // a private function
        $this->weight = $n;
    }
}

$mango = new fruit();

$mango->set_name('Mango'); // OK
echo "Name: {$mango->name}";

//$mango->set_color('Yellow'); //Error

//$mango->set_weight('300'); //Error
