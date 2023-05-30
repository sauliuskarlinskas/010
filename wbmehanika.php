<?php

$file = file_get_contents(__DIR__. '/spurga.png');

header('Content-Type: image/png');

echo $file;
