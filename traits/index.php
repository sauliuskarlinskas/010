<?php

// spl_autoload_register(function ($class) {

//     echo $class . ' 1<br>';

// });

// spl_autoload_register(function ($class) {

//     echo $class . ' 2<br>';

// });

// spl_autoload_register(function ($class){   auto louderiai

//     echo $class . '<br>';

//     require __DIR__ . '/' . $class . '.php';
// })

require __DIR__ . '/Tevas.php';
require __DIR__ . '/Vaikas.php';
require __DIR__ . '/Kleopatra.php';
require __DIR__ . '/Ieva.php';

$vaikas = new Vaikas;

$vaikas->fun();
$vaikas->funK();
$vaikas->funI();