<?php


class FruitWithConstructor
{

    public $name;
    public $color;


    function __construct($name, $color)

    {
        $this->name = $name;
        $this->color = $color;
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new FruitWithConstructor('apple', 'green');

var_dump($apple);
echo 'my apple color is ' . $apple->get_color() . PHP_EOL;
