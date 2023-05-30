<?php

echo '<pre>';
echo '-------1-------<br>';

$m1 = [];

for ($i = 0; $i < 10; $i++) {
    $sk = [];
    for ($a = 0; $a < 5; $a++) {
        $sk[] = rand(5, 25);
    }
    $m1[] = $sk;
}

print_r($m1);


echo '<pre>';
echo '-------2a-------<br>';

$count = 0;
foreach ($m1 as $subArray) {
    foreach ($subArray as $element) {
        if ($element > 10) {
            $count++;
        }
    }
}

echo "Elementų didesnių už 10 yra: " . $count . "\n";


echo '<pre>';
echo '-------2b-------<br>';

$maxNumb = null;
foreach ($m1 as $subArray) {
    foreach ($subArray as $element) {
        if ($maxNumb === null || $element > $maxNumb) {
            $maxNumb = $element;
        }
    }
}

echo "Didžiausia reikšmė: " . $maxNumb . "\n";

echo '<pre>';
echo '-------2c-------<br>';
 
$sum = array();

foreach ($m1 as $subArray) {
    foreach ($subArray as $index => $element) {
        if(!isset($sum[$index])) {
            $sum[$index] = 0;
        }
        $sum[$index] += $element;
    }
}

echo "Vienodu indeksu reiksmiu sumos:";
print_r($sum);


echo '<pre>';
echo '-------2d-------<br>';

foreach ($m1 as &$subArray) {
    while (count($subArray) < 7) {
        $subArray[] = rand(5, 25);
    }
}

print_r($m1);


echo '<pre>';
echo '-------2e-------<br>';

$elementSum = array();
foreach ($m1 as $subArray) {
    $elementSum[] = array_sum($subArray);
}
echo "Masyvo elementu sumos: \n";
print_r($elementSum);


echo '<pre>';
echo '-------3-------<br>';  // nebaigtas

$m2 = [];

for ($i = 0; $i < 10; $i++) {
    $kiek = rand(2, 20);
    $elemet = [];

    for ($a = 0; $a < $kiek; $a++) {
        $element = chr(rand(65, 90));
    }
    $m2[] = $element;
}





echo '<pre>';
echo '-------5-------<br>';

$m3 = [];

for ($i = 0; $i < 30; $i++) {
    $user_id = rand(1, 1000000);
    $place_in_row = rand(0, 100); 

    $elementas = [
        'user_id' => $user_id,
        'place_in_row' => $place_in_row
    ];

    $m3[] = $elementas;
}

print_r($m3);

echo '<pre>';
echo '-------6-------<br>';

// Rūšiavimas pagal user_id didėjančia tvarka

usort($m3, fn($a, $b) => $a['user_id'] <=> $b['user_id']);

print_r($m3);


echo '<pre>';
echo '--------------<br>';
// Rūšiavimas pagal place_in_row mažėjančia tvarka

usort($m3, fn($a, $b) => $b['place_in_row'] <=> $a['place_in_row']);

print_r($m3);

