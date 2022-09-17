<?php

use hahahalib\show;
use hahahalib\config;

require __DIR__.'/vendor/autoload.php';

echo 444;
// echo PHP_EOL;
echo "<br>";



show::hahaha();

$rrr = config::Instance()->Initial();

$eee = 0;

$www = 4;
$qqq = &$www;

$qqq =5;
echo $www;
echo $qqq;

$a = [
    "aaa" => 5,
];
$b = &$a;
$b["aaa"] = 0;

var_dump($a);
var_dump($b);

unset($b);

$b["aaa"] = 2;

var_dump($a);
var_dump($b);

show::add($a);
var_dump($a);

show::add2($a);
var_dump($a);






