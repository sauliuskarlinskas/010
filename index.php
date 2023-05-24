<h1>
    Labas
</h1>


<?php     //php kodas, pradzia

echo 'labas, PHP';

?>       <!-- php pabaiga , jei po jo html -->

<h1> vel HTML</h1>

<?php

echo 'vel PHP';  //nereikia uzbaigimo jei nieko nera


$vienasDu = 1 + 2; // kintamasis, butinai kabliataskiu baigti
echo $vienasDu;  
echo '<br>';
//'nerimti' komentarai - del saves
# vykdomieji komentarai
/*  oficialus */


$str1 = "stri $vienasDu \n\n\n ngas"; //specialiem poreikiams(nenaudoti)
$str2 = 'stri $vienasDu \n\n\n ngas'; //naudotinos

echo  $str1;
echo '<br>';
echo  $str2;
echo $str1 . $str2;

echo '<pre>';
$t = 12;
$h = null;
var_dump(isset($t));  //var_dump technines info parodymas isvedimas  i ekrana
var_dump(isset($g));
var_dump(isset($h));

$pirmas = 'bla bla';
$antras = 'ku kū';

var_dump($pirmas);
var_dump($antras);

$what = 5 > 4 ? 'nice' : 'cool';

$digit = 5;

$what = 5 > 12 ? ++$digit : --$digit;

echo "<h1>$digit $what</h1>";

$letter = 'W';

$animal = match($letter) {
    'W' => 'Wolf',
    'F' => 'Fox',
    'A', 'R' => 'Racoon',
    default => 'Rabbit'
};

switch($letter) {
    case 'W' :
        $animal2 = 'Wolf';
        break;
    case 'F' :
        $animal2 = 'Fox';
        break;
    case 'A' :
    case 'R':
        $animal2 = 'Racoon';
        break;
    default:
        $animal2 = 'Rabbit' ;
            
};

$p = 'S';

switch ($p) {
    case 'S' : echo "<h1>Small</h1>";
    case 'M' : echo "<h1>Medium</h1>";
    case 'L' : echo "<h1>Large</h1>";
    default : echo "<h1>X Large</h1>";
}

echo "<h1>$animal</h1>";

// Masyvai
//$m1 = array(); // senas uzrasymas - nerasyti

$m1 = ['labas'=>'bebras', 'lape', '--' =>'ziurke']; // teisingai

//array_push($m1, 'kiskis'); // nenaudotinas

$m1[] = 'barsukas'; // ideda sekanciu nariu

$m1[20] = 'vilkas'; //ideda tuo indeksu kuriuo parasytas

print_r($m1);

array_unshift($m1, 'seskas');

print_r($m1);

print_r(array_values($m1));    //pataisyt masyvui


$colors = ['red', 'green', 'blue', 'yellow'];


//foreach ($colors as $key => $value) {   //pavercia juodu
  //  $colors[$key] = 'black';
//}

//foreach ($colors as &$color) {   //pavercia juodu,  &-priskyrimas palei nuoroda, perduoda kintamaji
//$color = 'black';
//}


foreach ($colors as &$value) {} // perrasomas paskutinis elementas

unset($value); //pataiso arba nenaudot to pacio vardo


foreach ($colors as $value) {
   echo 'Reikšmė: ' . $value . '<br>';
}
 print_r($colors);


 for ($x = 1; $x <= 5; $x++) {
    echo 'Numeris: '.$x.' <br>';
 }

 echo '<pre>';

 foreach (range(1, 5) as $x) {
    echo 'Numeris: '.$x.' <br>';
 }

 $m2 = [
    [5, 6, 9],
    [32, 25, 98],
    [123, 258, 987]
 ];

 print_r($m2);


 foreach($m2 as $value) {

    if (is_array($value)) {
        foreach($value as $digit) {
            if (is_integer($digit)) {
             $sum += $digit; 
            }
        
        }
    }
    else {
        if (is_infinite($value)) {
            $sum += $value;
         }
    }
 }

    print_r($sum);

    echo '<pre>';

    define('BRIEDIS', 'Briedis miega');  //constanta padifainta

    var_dump(defined(BRIEDIS));
    echo BRIEDIS;
    
//file_put_contents('miskas.txt', BRIEDIS. "\n", FILE_APPEND);    // irasimas

