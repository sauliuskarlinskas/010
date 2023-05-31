<?php

echo '<pre>';
echo '-------1-------<br>';

function one()
 {
    $number = 'Vienas';
    echo "<h1>$number</h1>";
}

one();

echo '<pre>';
echo '-------2-------<br>';

function two( $number, $tagNumber )
 {
    echo "<h$tagNumber>$number</h$tagNumber>";
}

two( 'du', 2 );

echo '<pre>';
echo '-------3-------<br>';

$stringas = md5( time());
//generuoja atsitiktini stringa

$stringas = preg_replace_callback('/\d+/', fn($m) => '<h1>'.$m[0].'</h1>' , $stringas);

echo $stringas;



echo '<pre>';
echo '-------4-------<br>';

function dalijasiBeLiekanos( $sk ) {
    if ( !is_int( $sk ) ) {
        return 'Iveskite sveika skaiciu';
    }
    $beLiekanos = 0;

    for ( $i = 2; $i < $sk; $i++ ) {
        if ( $sk % $i == 0 ) {
            $beLiekanos++;
        }
    }

    return $beLiekanos;
}

echo dalijasiBeLiekanos( 72 );
echo '<pre>';
echo '--------------<br>';
echo dalijasiBeLiekanos( 41 );
echo '<pre>';
echo '--------------<br>';
echo dalijasiBeLiekanos( 112 );
echo '<pre>';
echo '--------------<br>';
echo dalijasiBeLiekanos( 29 );


echo '<pre>';
echo '-------5-------<br>';


$m1 = [];

for ( $i = 0; $i < 100; $i++ ) {
    $number = rand( 33, 77 );
    $m1[] = $number;
}

usort($m1, function($a, $b) {
return dalijasiBeLiekanos($b) - dalijasiBeLiekanos($a);
});

//print_r($m1);

//kitas budas
$m2 = [];

foreach(range(1, 100) as $_) {
    $digit = [
        'value' => rand(33, 77)
    ];
    $arr[] = $digit;
}

foreach ($arr as &$digit) {
    $digit['div'] = rand(1, 11);
}

usort($arr, fn($a, $b) => $b['div'] <=> $a['div']);

echo '<pre>';
echo '--------------<br>';
//print_r($arr);



echo '<pre>';
echo '-------6-------<br>';

$m3 = [];

foreach(range(1, 100) as $_) {
    $digit = [
        'value' => rand(333, 777)
    ];
    $m3[] = $digit;
}

print_r($m3);


echo '<pre>';
echo '-------7-------<br>';


$size = rand(10, 30);
$all = 0;

for ($i = 0; $i < $size; $i++) {

    $howBig = rand(10, 20);
    $small = [];
    for ($k = 0; $k < $howBig -1; $k++) {
        $small[] = rand(0, 10);
    }
    $small[] = $all;
    $all = $small;

}

print_r($all);


echo '<pre>';
echo '-------8-------<br>';


