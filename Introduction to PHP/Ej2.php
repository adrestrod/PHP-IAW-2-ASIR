<?php
$num=rand(1,100);
echo $num;

if ($num > 50)
    echo "El número " . $num . " Es mayor que 50";
elseif ($num < 50)
    echo "El número " . $num . " es menor que 50";
else
    echo "El número " . $num . "es igual a 50";