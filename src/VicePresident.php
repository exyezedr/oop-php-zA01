<?php

require_once __DIR__ . "/Manager.php";

class VicePresident extends Manager
{
}

$manager = new Manager();
$vicePresident = new VicePresident();

$manager->name = "john doe";
$vicePresident->name = "david wilson";

echo <<<MULTILINE
{$manager->sayHello($vicePresident->name)}
{$vicePresident->sayHello($manager->name)}\n
MULTILINE;
