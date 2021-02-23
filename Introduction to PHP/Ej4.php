<?php

$cad1 = "New";
$cad2 = "World";
$cad3 = "Order";
$cad4 = "Hello World";
$cad5 = "Order";

echo substr($cad1,2);
echo strtolower($cad3);
echo strtoupper($cad2);
echo trim($cad2, "or");
echo strchr($cad4, 111);
echo strcmp($cad3, $cad5);