<?php

class Person
{
    // property
    var string $name;

    // nullable
    var ?string $address =  null;

    // default property
    var string $country = "Indonesia";

    // constant
    const APP_VERSION = "1.0";


    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            # code...
            echo "Hello, my name is  {$this->name} " . PHP_EOL;
        } else {
            echo "Hello {$name}, my name is  {$this->name} " . PHP_EOL;
        }
    }

    //self
    function info()
    {
        echo "APP info " . self::APP_VERSION . PHP_EOL;
    }

    // destructor

    // function __destruct()
    // {
    //     echo "Object person {$this->name} is destroyed!" . PHP_EOL;
    // }
}
