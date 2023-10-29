<?php

class FruitWithDestructor
{
    public $name;
    public $color;


    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }


    function __destruct()
    {
        echo "The fruit is {$this->name} and color is {$this->color}.";
    }
}

$apple = new FruitWithDestructor('apple', 'green');
