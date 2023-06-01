<?php

session_start();

$_SESSION['ob'] = 'Baltas bebras';

echo $_SESSION['ob'];

//setcookie('bebras', 'Bebras plaukia upe', time() + 3600);

//echo $_COOKIE['bebras'];

