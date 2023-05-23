<?php

echo '<pre>';
echo '-------0-------<br>';

$petras = rand(10, 20);
$jonas = rand(5, 25);

if ($petras > $jonas) {
    echo "Petras: $petras, Jonas: $jonas,laimejo Petras";
} elseif($petras < $jonas) {
    echo "Petras: $petras, Jonas: $jonas, laimejo Jonas";
} else {
    echo "Petras: $petras, Jonas: $jonas, niekas nelaimejo";
}


echo '<pre>';
echo '-------1-------<br>';

$vardas = "Mukis";
$pavarde = "Bukis";
$gimimoMetai = 1980;
$data = 2023;

$amzius = $data - $gimimoMetai; 

//echo "<h1>Aš esu $vardas $pavarde. Man yra $amzius metai(ų).</h1>";


echo '<pre>';
echo '-------2-------<br>';

$pirmas = rand(1, 4);
$antras = rand(1, 4);

if ($pirmas > $antras) {
    $ats = round($pirmas / $antras, 2);
} else {
    $ats = round($antras / $pirmas, 2);
}

//echo "<h1> Atsakymas: $ats </h1>";


echo '<pre>';
echo '-------3-------<br>';

$lape = rand(0, 25);
$zuikis = rand(0, 25);
$ruonis = rand(0, 25);

//if (($lape > $zuikis && $lape < $ruonis) || ($lape < $zuikis && lape >$ruonis)) {
 //   $vidurinis = $lape;
//} elseif (($zuikis > $lape && $zuikis < $ruonis) || ($zuikis < $lape && $zuikis > $ruonis)) {
    $vidurinis = $zuikis;
//} else {
 //   $vidurinis = $ruonis;
//}

//echo "<h1>Vidurinis: $vidurinis</h1>";

echo '<pre>';
echo '-------4-------<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

//echo "<h1>Kraštinės ilgiai: a = $a, b = $b, c = $c";

if (($a + $b > $c) && ($a + $c >$b) && ($b +$c > $a)) {
    echo "<h1>Trikampis gaunasi!</h1>";
} else {
    echo "<h1>Trikampis nesigauna!</h1>";
}


echo '<pre>';
echo '-------5-------<br>';

$a =rand(0, 2);
$b =rand(0, 2);
$c =rand(0, 2);
$d =rand(0, 2);
echo "<h1>$a $b $c $d</h1>";

$_0 =0;
$_1 =0;
$_2 =0;

if ($a == 2) {
    $_2++;
}
if ($b == 2) {
    $_2++;
}
if ($c == 2) {
    $_2++;
}
if ($d == 2) {
    $_2++;
}

$suma = $a +$b + $c + $d;

$_1 = $suma - 2 * $_2;
$_0 = 4 - $_1 - $_2;

echo "<h1>0:$_0, 1:$_1, 2:$_2</h1>";


echo '<pre>';
echo '-------6-------<br>';

$skaicius = rand(1, 6);

if ($skaicius == 1) {
    echo "<h1>$skaicius</h1>";
} elseif ($skaicius == 2) {
    echo "<h2>$skaicius</h2>";
} elseif ($skaicius == 3) {
    echo "<h3>$skaicius</h3>";
} elseif ($skaicius == 4) {
    echo "<h4>$skaicius</h4>";
}  elseif ($skaicius == 5) {
    echo "<h5>$skaicius</h5>";
} else {
    echo "<h5>$skaicius</h5>";
}


echo '<pre>';
echo '-------7-------<br>';

$sk1 = rand(-10, 10);
$sk2 = rand(-10, 10);
$sk3 = rand(-10, 10);

echo "<h1 style='color:";
echo ($sk1 < 0) ? "green" : (($sk1 == 0) ? "red" : "blue");
echo "<h1>$sk1</h1>";

echo '<br>';
echo "<h1 style='color:";
echo ($sk2 < 0) ? "green" : (($sk2 == 0) ? "red" : "blue");
echo "<h1>$sk2</h1>";

echo '<br>';
echo "<h1 style='color:";
echo ($sk3 < 0) ? "green" : (($sk3 == 0) ? "red" : "blue");
echo "<h1>$sk3</h1>";


echo '<pre>';
echo '-------8-------<br>';

$zvakes = rand(5, 3000);

$kaina = $zvakes * 1;

if ($kaina > 1000) {
    $nuolaida = 0.03;
} elseif ($kaina > 2000) {
    $nuolaida = 0.04;
}

$nuolaidosSuma = $kaina * $nuolaida;
$galutineKaina = $kaina - $nuolaidosSuma;

echo "<h1>Perkama žvakių kiekis: $zvakes</h1>";
echo "<br>";
echo "<h1>Pradine kaina: $kaina €</h1>";
echo "<br>";
echo "<h1>Taikoma nuolaida: $nuolaidosSuma €</h1>";
echo "<br>";
echo "<h1>Galutine kaina: $galutineKaina €</h1>";
echo "<br>";



echo '<pre>';
echo '-------9-------<br>';

$obuolys = rand(0, 100);
$kriause = rand(0, 100);
$slyva = rand(0, 100);

echo "<h1>Skaiciai: $obuolys , $kriause , $slyva</h1>";
echo "<br>";
$vidurkis = ($obuolys + $kriause + $slyva) / 3;

if ($vidurkis < 10 || $vidurkis > 90) {
    echo "<h1>Aritmetinis vidurkis: $vidurkis</h1>"; 
}
