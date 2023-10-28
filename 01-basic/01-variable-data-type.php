<?php
// This is single-line comment

/*
This is multiline comment
made by me
*/
echo "Hello World" . PHP_EOL;


// variable
$name = 'Arief Rachman Hakim';


// print value
echo 'get output name by echo : ' . $name . PHP_EOL;
print 'get output name by print : ' . $name . PHP_EOL;


// data type
/* PHP supports the following data types:
- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource
*/

$my_name = 'Arief Rachman Hakim'; // string
$age = 21;                        // number
$my_number = 22.5;                // float or double
$is_married = false;              // boolean
$hobbies = ['coding', 'gaming'];  // array
$has_gf = null;                   // null
$my_data = (object)[              // object
    'name' => 'arief',
    'age' => 22
];

foreach ($my_data as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
};
