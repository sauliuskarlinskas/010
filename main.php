<?php

echo '<h1 style="color:green;">MAIN START</h1>';

include_once __DIR__ . '/file1.php'; // nebenaudojamas

include_once __DIR__ . '/file2.php'; // nebenaudojamas

include_once __DIR__ . '/file2.php'; // nebenaudojamas

include __DIR__ . '/file1.php'; // nebenaudojamas

include __DIR__ . '/file2.php'; // nebenaudojamas


require_once __DIR__ . '/file2.php'; // nebenaudojamas


require __DIR__ . '/file2.php'; //dabar naudojamas

require __DIR__ . '/file1.php'; //dabar naudojamas


echo '<h1>MAIN END</h1>';
