<?php

require_once __DIR__ . "/conflict.php";
require_once __DIR__ . "/helper.php";

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

echo json_encode($conflict1) . "\n";
echo json_encode($conflict2) . "\n";
echo Helper\APP . "\n";
echo Helper\helpMe() . "\n";
