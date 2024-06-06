<?php

$matches = [];
$result = preg_match_all("/jo|oe/i", "john doe", $matches);

echo "$result\n";
echo json_encode($matches) . "\n";

$result = preg_replace("/fuck|stupid/i", "****", "you fucking stupid");

echo "$result\n";

$result = preg_split("/[\s,-]/", "john doe football,club-barcelona");

echo json_encode($result) . "\n";
