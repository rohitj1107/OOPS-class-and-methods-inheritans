<?php

/**
 * Car
 */

class Seater{
    public $num = 2;
    public function count(){
        print 'Seater : '.$this->num++.' ';
    }

    public function mcount(){
        print 'Seater : '.--$this->num.' ';
    }
}

class Tata extends Seater{
    public function name($name){
        echo "Name Of car : $name <br>";
    }
}

class Honda extends Seater{

    public function name($name){
        echo "Name of bike : $name <br>";
    }
}

$obj = new Tata;
$obj->name('Nexon');
$obj->count();
$obj->count();
$obj->count();
$obj->count();

echo '<hr>';

$obj1 = new Honda;
$obj1->name('Activa');
$obj1->count();

echo '<hr>';

?>
