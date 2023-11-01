<?php
$angka = [1, 2, 3, 4, 5];


$kaliDua = array_map(function ($value) {
    return $value * 2;
}, $angka);

$kaliTiga = array_map(
    fn ($value) =>
    $value * 3,
    $angka
);

var_dump($kaliDua);
var_dump($kaliTiga);
