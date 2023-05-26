<?php

echo '<pre>';
echo '-------1-------<br>';

$m1 = [];

for ( $i = 0; $i < 30; $i++ ) {
    $number = rand( 5, 25 );
    $m1[] = $number;
}

print_r( $m1 );

echo '<pre>';
echo '-------2a-------<br>';

$daugiauUz10 = 0;

foreach ( $m1 as $reiksme ) {
    if ( $reiksme > 10 ) {
        $daugiauUz10++;
    }
}
echo ' Masyve yra reikšmių didesnių už 10:'. $daugiauUz10;

echo '<pre>';
echo '-------2b-------<br>';

$didziausia = max( $m1 );
$indeksai = array_keys( $m1, $didziausia );

echo 'Didžiausia masyvo reikšme:'.$didziausia.'<br>' ;
print_r ( $indeksai );

echo '<pre>';
echo '-------2c-------<br>';

$poriniuSum = 0;

for ( $i = 0; $i < count( $m1 );
$i += 2 ) {
    $poriniuSum += $m1[ $i ];
}

echo $poriniuSum;

echo '<pre>';
echo '-------2d-------<br>';

$m2 = [];

foreach ( $m1 as $indeksas => $ats ) {
    $m2[] = $ats - $indeksas;
}

print_r ( $m2 );

echo '<pre>';
echo '-------2e-------<br>';

for ( $i = 0; $i < 10; $i++ ) {
    $number = rand( 5, 25 );
    $m2[] = $number;
}
print_r ( $m2 );

echo '<pre>';
echo '-------2f-------<br>';

foreach ( $m2 as $key => $value ) {
    if ( $key % 2 === 0 ) {
        $poriniai[] = $value;
    } else {
        $neporiniai[] = $value;
    }
}

print_r( $poriniai );
print_r( $neporiniai );

echo '<pre>';
echo '-------2g-------<br>';

foreach ( $m2 as $key => & $value ) {
    if ( $key % 2 === 0 && $value > 15 ) {
        $value = 0;
    }
}

unset( $value );
print_r( $m2 );

echo '<pre>';
echo '-------2h-------<br>';

foreach ( $m2 as $key => $value ) {
    if ( $value > 10 ) {
        echo $key;
        break;
    }

}

echo '<pre>';
echo '-------2i-------<br>';

foreach ( $m2 as $key => $value ) {
    if ( $key % 2 == 0 ) {
        unset( $m2[ $key ] );
    }
}

print_r( $m2 );

echo '<pre>';
echo '-------3-------<br>';

$m3 = [];

for ( $i = 0; $i < 200; $i++ ) {
    $letter = chr( rand( 65, 68 ) );
    $m3[] = $letter;
}
//print_r( $m3 );

$count = array_count_values( $m3 );

foreach ( $count as $letter => $count ) {
    echo 'Raide '.$letter.' '. 'pasikartoja '.$count.'.';
}

echo '<pre>';
echo '-------4-------<br>';


