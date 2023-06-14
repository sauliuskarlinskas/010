<?php

require __DIR__ . '/Krepselis.php';


$k1 = Krepselis::get();
$k2 = Krepselis::get();
//$k2 = clone($k1);

var_dump($k1);
var_dump($k2);