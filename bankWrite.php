<?php
defined('GO') || die('no entry');

$dataJason = json_encode($data);
file_put_contents(__DIR__ . '/data.json', $dataJason);
