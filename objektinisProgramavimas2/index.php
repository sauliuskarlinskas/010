<?php


require __DIR__ . '/Zveris.php';

require __DIR__ . '/Paukstis.php';


$bebras = new Zveris('Bebras', 5);

$briedis = new Zveris('Briedis', 7);

$genys = new Paukstis('Genys', 4);

$bebras->run();

$genys->fly();


var_dump($bebras);

echo '<br>';

var_dump($briedis);

echo '<br>';

var_dump($genys);

echo '<br>';