<?php

require __DIR__ . '/Kibiras2.php';


$vilko = new Kibiras2;

$lapes = new Kibiras2;

$zuikio = new Kibiras2;

$vilko->prideti1Akmeni();
$vilko->prideti1Akmeni();
$zuikio->prideti1Akmeni();
$lapes->prideti1Akmeni();

$zuikio->pridetiDaugAkmenu(7);
$zuikio->pridetiDaugAkmenu(4);
$vilko->pridetiDaugAkmenu(2);
$lapes->pridetiDaugAkmenu(9);

echo 'Vilko akmenys: ' . $vilko->gautiAkmenuKieki();

echo '<br>';

echo 'Zuikio akmenys: ' . $zuikio->gautiAkmenuKieki();

echo '<br>';

echo 'Lapes akmenys: ' . $lapes->gautiAkmenuKieki();

echo '<br>';

echo Kibiras2::gautiAkmenuKiekiVisuoseKibiruose();