<?php

require_once __DIR__ . "/conflict.php";
require_once __DIR__ . "/helper.php";

use Data\One\{Conflict as Conflict1, Zero};
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe;
use const Helper\APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$zero = new Zero();

echo json_encode($conflict1) . "\n";
echo json_encode($conflict2) . "\n";
echo json_encode($zero) . "\n";
echo APP . "\n";
echo helpMe() . "\n";
