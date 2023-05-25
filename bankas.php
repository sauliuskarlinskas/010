<?php

echo '<pre>';

//$data = [
//    ['name' => 'bebras', 'amount' => 20],
//    ['name' => 'avis', 'amount' => 60],
//    ['name' => 'lape', 'amount' => 0]
//];
//
//$dataJson = json_encode($data);
//$dataSer = serialize($data);  //PHP kodavimo budas

//file_put_contents(__DIR__ . '/data.json', $dataJson);
//file_put_contents(__DIR__ . '/data.ser', $dataSer);

$jsonFile = file_get_contents(__DIR__ . '/data.json');
$serFile = file_get_contents(__DIR__ . '/data.ser');

$dataFromJason = json_decode($jsonFile, 1); // dekodinant jsone irasom 1 gale, kad isverstu i array
$dataFromSer = unserialize($serFile);

print_r($dataFromJason);
print_r($dataFromSer);