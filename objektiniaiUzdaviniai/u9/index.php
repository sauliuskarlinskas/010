<?php


require __DIR__ . '/MarsoPalydovas.php';


$palydovas1 = MarsoPalydovas:: get();
$palydovas2 = MarsoPalydovas:: get();
$palydovas3 = MarsoPalydovas:: get();

//var_dump($palydovas1);
//var_dump($palydovas2);
//var_dump($palydovas3);
echo $palydovas1;

echo '<br>';

echo $palydovas2;

echo '<br>';

echo $palydovas3;
