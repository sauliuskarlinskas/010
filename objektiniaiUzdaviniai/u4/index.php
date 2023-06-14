<?php

require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';

$onos = new KibirasNePo1;

$simos = new KibirasNePo1;

$tomos = new KibirasNePo1;

$onos-> prideti1Akmeni();

$simos-> prideti1Akmeni();

$tomos-> prideti1Akmeni();

echo $onos->kiekPririnktaAkmenu();
echo $simos->kiekPririnktaAkmenu();
echo $tomos->kiekPririnktaAkmenu();

