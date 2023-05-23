<?php

echo '<pre>';
echo '-------1-------<br>';

$name = 'Angelina';
$lastName = 'Jolie';

$shorter_name = strlen($name) > strlen($lastName) ? $name : $lastName;
echo $shorter_name;

echo '<pre>';
echo '-------2-------<br>';

$nameUpper = strtoupper($name);
$lastNameLower = strtolower($lastName);

echo $nameUpper;
echo $lastNameLower;

echo '<pre>';
echo '-------3-------<br>';

$firstLeters = substr($name, 0, 1) . substr($lastName, 0, 1);

echo $firstLeters;

echo '<pre>';
echo '-------4-------<br>';

$last3leters = substr($name, -3) . substr($lastName, -3);

echo $last3leters;

echo '<pre>';
echo '-------5-------<br>';

$filmas = "An American in Paris";
$beA = str_ireplace("a", "*", $filmas);

echo $beA;

echo '<pre>';
echo '-------6-------<br>';

$kiekA = substr_count(strtolower($filmas), "a");
echo $kiekA;


echo '<pre>';
echo '-------7-------<br>';

$filmas2 = "Breakfast at Tiffany's";
$filmas3 = "2001: A Space Odyssey";
$filmas4 = "It's a Wonderful Life";

$beBalsiu = preg_replace('/[aeiou]/i','', $filmas);
echo "$beBalsiu <pre>";
$beBalsiu = preg_replace('/[aeiou]/i','', $filmas2);
echo "$beBalsiu <pre>";
$beBalsiu = preg_replace('/[aeiou]/i','', $filmas3);
echo "$beBalsiu <pre>";
$beBalsiu = preg_replace('/[aeiou]/i','', $filmas4);
echo "$beBalsiu <pre>";

echo '<pre>';
echo '-------8-------<br>';

$filmas5 = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

  preg_match('/Episode\s+(\d+)/', $filmas5, $numeris);
  
  if (isset($numeris[1])) {
      echo "Star Wars: Episode $numeris[1]  - A New Hope"; 
  }


echo '<pre>';
echo '-------9-------<br>';

$m1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

$more5 = 0;
$count = 0;

$find = 5;

for ( $i = 0; $i < strlen( $m1 ); $i++ ) {
    if ($i != strlen($m1) - 1) {
    if ( $m1[ $i ] != ' ' ) {
        $count++;
    } 
    else {
        if ( $count <= 5 ) {
            $more5++;
        }
        echo '<br>';
        echo $count;
        $count = 0;
    }
    } else {
        if ( $m1[ $i ] != ' ' ) {
            $count++;
        }
        if ( $count <= $find ) {
            $more5++;
        }
}
}
echo "<h1>$more5</h1>";

// kitas budas

 preg_replace_callback('/[^ ]+/', function($w) use (&$more5) {
    if (strlen($w[0]) <= 5) {
        $more5++;
    }
} , $m1);

// kitas budas

foreach(explode(' ', $m1) as $w) {
    if (strlen($w) <= 5) {
        $more5++;
    }
}

echo '<pre>';
var_dump($more5);

echo '<pre>';
echo '-------10-------<br>';

$raide1 = chr(rand(97,122));
$raide2 = chr(rand(97,122));
$raide3 = chr(rand(97,122));

echo $raide1, $raide2, $raide3;