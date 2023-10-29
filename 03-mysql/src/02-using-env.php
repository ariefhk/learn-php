<?php

require_once __DIR__ . '/01-setting-env.php';

$name = getEnvVariable('NAME');

if (is_null($name)) {
    echo 'Your env not found!' . PHP_EOL;
    return;
}

echo 'your name is ' . $name;
