<?php


require_once __DIR__ . "/data/product.php";

$product = new Product("Apple", 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;


$dummyProduct =  new ProductDummy('Dummy', 10000);

$dummyProduct->info();
