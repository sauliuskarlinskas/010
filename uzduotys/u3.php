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

$number = rand(3000, 4000);
$ats = '';

for ($i = 1; $i <= $number; $i++) {
  if ($i % 77 === 0) {
    $ats .= $i . ', ';
  }
}
$ats = rtrim($ats, ', ');
echo  $ats;



echo '<pre>';
echo '-------4-------<br>';


for ($i = 0; $i <= 100; $i++) {
   for($a = 0; $a <= 100; $a++) {
    echo  " *" ;
   }

echo '<br>';
}

echo '<pre>';
echo '-------5-------<br>';

$squareLine = 100;
for ($i = 0; $i < $squareLine; $i++) {
    for($a = 0; $a < $squareLine; $a++) {
        if ($i == $a || $i == $squareLine - 2 - $a + 1) {
            echo "<span style='color: red'> #</span>";
        } else {
            echo " *";
        }
    }
    echo '<br>';
}

echo '<pre>';
echo '-------6-------<br>';


    $moneta = rand(0, 1);
    $H = 0;
    $S = 1;
    echo $moneta;