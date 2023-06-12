<?php


// klases vardas prasideda is didziosios
//vienas failas, viena klase ir daugiau nieko
require __DIR__ . '/Ufo.php';

$ufo1 = new Ufo('Jupiter');
$ufo2 = new Ufo('Venus' , 154);


//$ufo1 = new Ufo;
//$ufo2 = new Ufo;

//$ufo3 = clone$ufo1;

var_dump($ufo1);

echo '<br>';

var_dump($ufo2);

//var_dump($ufo3);

//$ufo1->speed = 17;

echo '<br>';

echo $ufo1->speed;

echo '<br>';

echo $ufo2->speed;

echo '<br>';

var_dump($ufo1);

echo '<br>';

var_dump($ufo2);

echo '<br>';

echo $ufo2->whatTime();

echo '<br>';

echo $ufo1->turbo();

echo '<br>';

echo $ufo2->turbo();

echo '<br>';

echo  $ufo2->whatTimeBig();

echo '<br>';

echo $ufo1->where();

echo '<br>';

//echo  $ufo2->bebras;

echo '<br>';

echo $ufo1->destination;

echo '<br>';

