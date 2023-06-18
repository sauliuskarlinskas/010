<?php

require __DIR__ . '/Tenisininkas.php';

$tenisininkas1 = Tenisininkas::getZaidejas('Romas');
$tenisininkas2 = Tenisininkas::getZaidejas('Petras');

Tenisininkas::zaidimoPradzia();

if ($tenisininkas1->arTuriKamuoliuka()) {
    echo 'Žaidimą pradėjo ' . $tenisininkas1->getZaidejoVardas();
} else {
    echo 'Žaidimą pradėjo ' . $tenisininkas2->getZaidejoVardas();
}

// var_dump($tenisininkas1);
// var_dump($tenisininkas2);

echo '<br>';

if ($tenisininkas1->arTuriKamuoliuka()) {
    $tenisininkas1->perduotiKamuoliuka();
} else {
    $tenisininkas2->perduotiKamuoliuka();
}
