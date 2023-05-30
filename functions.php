<?php

$hello = 'labas';

function fun() {

    // global $hello senas nenaudojamas  apie 10 metu

    echo "<br> 1 $hello";

    $hello = 'Hi';

    echo "<br> 2 $hello";

}

fun();

echo "<br> 3 $hello";

echo '<pre>';
echo '--------------<br>';

function sudeti( $vienas = 10, $du = 15 )
 {
    return $vienas + $du;
}
echo sudeti().'<br>';
echo sudeti( 1 ).'<br>';
echo sudeti( 1, 2 ).'<br>';

echo '<pre>';
echo '--------------<br>';

function sum( $vienas, $du, ...$rest ) // surenka likusius narius
 {
    return $vienas + $du + array_sum( $rest );
}

echo sum( 1, 2, 10, 32, 54, 8 ).'<br>';

echo '<pre>';
echo '--------------<br>';

$m = [ 5, 8, 9, 6, 25 ];
//masyvas

[ $a, $b, $c, $d, $e ] = [ ...$m ];
// isspredina, retai buna

echo $c;
//atspausdina

echo '<pre>';
echo '--------------<br>';

function add1() 
 {
    static $c = 0;
    // static prisimena ir prideda
    return ++$c;
}

echo '<br>' . add1();
echo '<br>' . add1();
echo '<br>' . add1();
echo '<br>' . add1();

echo '<pre>';
echo '--------------<br>';

function recursive( $num ) {   // sunkiausias variantas, jei einasi apsieiti - tai nenaudoti
    echo $num, '<br>';
    if ( $num < 10 ) {
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive( $num + 1 );
    }
}
$startNum = 1;
recursive( $startNum );


echo '<pre>';
echo '--------------<br>';

$masyvas = [
    1,
    1,
    [
        1,
        [
            1,
            1,
            [
                1,
                [
                    1,
                    1
                ]
            ],
            1,
            2
        ],
        1,
        [
            1,
            [
                1
            ],
            1,
            1
        ],
        1,
        1
    ],
    [
        1
    ],
    1
];
print_r($masyvas);


function countSum($array)   //rekursine funkcija
{
    $sum = 0;
    foreach($array as $val) {
        if(!is_array($val)) {
            $sum += $val;
        } else {
            $sum += count($val);
        }
    }
    return $sum;
}

echo '<h2>'.countSum($masyvas). '</h2>';


echo '<pre>';
echo '--------------<br>';

$anonim = function() {            //anonimine funkcija
    echo '<h1>ANONIM</h2>';
};

$anonim();  // iskvietimas anonimines funkcijos


echo '<pre>';
echo '--------------<br>';

function blaBla()
{
    echo '<h2>BLA bla BLA</h2>';
}

function sayAnything($f)    // callback funkcija
{
    $f();
}

sayAnything($anonim);
sayAnything('blaBla');

sayAnything(function()   // inline funkcija
{
    echo '<h2>INLINE</h2>';
});


echo '<pre>';
echo '--------------<br>';

$masyvas2 = [
    ['bebras','kietas'],
    ['zuikis','trumpas'],
    ['vilkas','pilkas'],
    ['dramblys','storas'],
];

$sortName = function($a, $b)
{
    return $a[0] <=> $b[0];
} ;

function sortNameDesc($a, $b)
{
    return $b[0] <=> $a[0];
}

 $sortType = fn($a, $b) => $a[1] <=> $b[1];  //arow funkcija

//usort ($masyvas2, $sortName);

//usort ($masyvas2, 'sortNameDesc');

//usort ($masyvas2, $sortType);
usort ($masyvas2, fn($a, $b) => $b[1] <=> $a[1]); //galima tiesiai ideti inline funkcija

print_r($masyvas2);


echo '<pre>';
echo '--------------<br>';

$bebras = 'BEBRAS';

$addStars = fn() => '*' .$bebras. '*';

$addMinus = function() use (&$bebras)  //& perdavimas per referensa
{
    return '--' . $bebras . '--';
};

$bebras = $addMinus();
$bebras = $addMinus(); //kiekvienas tada prideda savo minusus
$bebras = $addMinus(); //kiekvienas tada prideda savo minusus

echo '<h2>' . $addStars() . '</h2>';
echo '<h2>' . $addMinus() . '</h2>';

echo '<h2>' . $bebras . '</h2>';