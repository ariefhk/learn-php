<?php

// vendor autoload locations
$vendor_location = __DIR__ . '/../vendor/autoload.php';

// using vendor autoload to gain access third party lib
require_once $vendor_location;

// import third party libray
use Symfony\Component\Dotenv\Dotenv;

// using third party
$dotenv = new Dotenv();

// env locations
$env_locations = __DIR__ . '/../.env';

// load env
$dotenv->load($env_locations);



function getEnvVariable($key)
{

    return $_ENV[$key] ?? null;
}
