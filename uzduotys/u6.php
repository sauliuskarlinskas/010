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

//$stringas = md5( time() );
// generuoja atsitiktini stringa

//echo preg_replace_callback( $stringas );

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

print_r($m1);


echo '<pre>';
echo '-------6-------<br>';

