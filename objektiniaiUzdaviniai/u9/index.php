<?php

echo '<pre>';

require __DIR__ . '/MarsoPalydovas.php';


$palydovas1 = MarsoPalydovas:: getMarsoPalydovas();
$palydovas2 = MarsoPalydovas:: getMarsoPalydovas();
$palydovas3 = MarsoPalydovas:: getMarsoPalydovas();
$palydovas4 = MarsoPalydovas:: getMarsoPalydovas();
$palydovas5 = MarsoPalydovas:: getMarsoPalydovas();

var_dump($palydovas1);
echo '<br>';
var_dump($palydovas2);
echo '<br>';
var_dump($palydovas3);
echo '<br>';
var_dump($palydovas4);
echo '<br>';
var_dump($palydovas5);
