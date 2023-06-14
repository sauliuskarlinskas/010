<?php

require __DIR__ . '/Kibiras2.php';


$vilko = new Kibiras2;

$zuikio = new Kibiras2;

$vilko->prideti1Akmeni();
$vilko->prideti1Akmeni();
$zuikio->prideti1Akmeni();

$zuikio->pridetiDaugAkmenu(7);
$zuikio->pridetiDaugAkmenu(4);
$vilko->pridetiDaugAkmenu(2);

echo 'Vilko akmenys: '. $vilko->gautiAkmenuKieki() ;

echo '<br>';

echo 'Zuikio akmenys: '. $zuikio->gautiAkmenuKieki();

echo '<br>';

echo Kibiras2::gautiAkmenuKiekiVisuoseKibiruose();