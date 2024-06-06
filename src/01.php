<?php

$array = ["first_name" => "john", "last_name" => "doe"];

$object = (object)$array;
$array = (array)$object;

echo <<<MULTILINE
my name is $object->first_name $object->last_name
my name is $array[first_name] $array[last_name]\n
MULTILINE;
