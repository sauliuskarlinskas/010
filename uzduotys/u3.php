<?php

echo '<pre>';
echo '-------1-------<br>';

$stars = str_repeat( '*', 400 );

$rows = ceil( strlen( $stars ) / 50 );

$splitStars = str_split( $stars, 50 );

foreach ( $splitStars as $line ) {
    echo '<h1>' . $line . '</h1>';
}

echo '<pre>';
echo '-------2-------<br>';

$daugiau150 = 0;

for ( $i = 0; $i <= 300; $i++ ) {
    $skaicius = rand( 0, 300 );

    if ( $skaicius >275 ) {
        echo '<div style="color: red;">'. $skaicius.'</div>';
    } else {
        echo $skaicius. ' ';
    }

    if ( $skaicius > 150 ) {
        $daugiau150++;
    }
}

echo '<pre>';
echo '-------3-------<br>';

$number = rand( 3000, 4000 );
$ats = '';

for ( $i = 1; $i <= $number; $i++ ) {
    if ( $i % 77 === 0 ) {
        $ats .= $i . ', ';
    }
}
$ats = rtrim( $ats, ', ' );
echo  $ats;

echo '<pre>';
echo '-------4-------<br>';

for ( $i = 0; $i <= 100; $i++ ) {
    for ( $a = 0; $a <= 100; $a++ ) {
        echo  ' *' ;
    }

    echo '<br>';
}

echo '<pre>';
echo '-------5-------<br>';

$squareLine = 100;
for ( $i = 0; $i < $squareLine; $i++ ) {
    for ( $a = 0; $a < $squareLine; $a++ ) {
        if ( $i == $a || $i == $squareLine - 2 - $a + 1 ) {
            echo "<span style='color: red'> #</span>";
        } else {
            echo ' *';
        }
    }
    echo '<br>';
}

echo '<pre>';
echo '-------6a-------<br>';

do {
    $moneta1 = rand( 0, 1 );
    echo $moneta1. '<br>';
}
while ( $moneta1 == 1 ) ;

echo '<pre>';
echo '-------6b-------<br>';

$H = 0;
$S = 0;

do {
    $moneta2 = rand( 0, 1 );
    if ( $moneta2 == 0 ) {
        echo 'H ';
        $H += 1;
    } else {
        echo 'S ';
        $S++;
    }
}
while ( $H < 3 );

echo '<pre>';
echo '-------6c-------<br>';

$skaicius = 0;

do {
    $moneta3 = rand( 0, 1 );
    if ( $moneta3 == 0 ) {
        echo 'H ';
        $skaicius++;
    } else {
        echo 'S ';
        $skaicius = 0;
    }

}
while ( $skaicius !== 3 );

echo '<pre>';
echo '-------7-------<br>';

$petroTaskai = 0;
$kazioTaskai = 0;

do {
    $petrasIsmeta = rand( 10, 20 );
    $kazysIsmeta = rand( 5, 25 );

    if ( $petrasIsmeta > $kazysIsmeta ) {
        $petroTaskai += $petrasIsmeta;
    } elseif ( $petroTaskai < $kazysIsmeta ) {
        $kazioTaskai += $kazysIsmeta;
    }
} while ($petroTaskai <= 222 && $kazioTaskai <= 222);

if ($petroTaskai > $kazioTaskai) {
    echo "Partiją laimėjo: PETRAS ir surinko: $petroTaskai";
} else {
echo "Partiją laimėjo: KAZYS ir surinko: $kazioTaskai";
}

echo '<pre>';
echo '-------8-------<br>';

echo "<div>";
for ($y=1 ; $y<=11*4; $y++){
    
    for($x=1; $x<=11*4; $x++){
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);
        $color = "rgb($r,$g,$b)";
        if($x < $y+5*4 && $x < 16*4-$y && 6*4-$x < $y && $x+5*4 >$y ){
            echo "<span  style='color: $color'>*</span>";
    }else{
        echo ' ';
    }
}
    echo "<br>";
}
echo "</div>";
