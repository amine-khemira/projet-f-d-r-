<?php
require ('Database/DBController.php');
require ('Database/Product.php');

$db = new DBController();

$product = new Product($db);
$fab= new Product($db);

$product->getData();
$fab->getData($table='fabriquant');
print_r($fab->getData($table='fabriquant'));
$z1= new Product($db);
$z1->getFab();
