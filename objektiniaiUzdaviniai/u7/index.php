<?php

require __DIR__ . '/Krepsys.php';
require __DIR__ . '/Grybas.php';

$krepsys1 = new Krepsys;

do {
    $grybas = new Grybas;
    if ($grybas->arGeras()) {
        $krepsys1->ideti($grybas->svoris);
        echo 'Idetas grybas: ' . $grybas->svoris.'g.'.'<br>';
    }

} while (!$krepsys1->arPilnas());

echo 'Pririnktų grybų, svoris: ' . $krepsys1->kiekis. 'g.';
echo '<br>';