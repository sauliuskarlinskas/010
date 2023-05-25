<?php
defined('GO') || die('no entry');

$jsonfile = file_get_contents(__DIR__ . '/data.json');

$dataFromJson = json_decode($jsonFile, 1);

$name = $_SERVER['argv'][1];
$amount = $_SERVER['argv'][2] ?? 0;
