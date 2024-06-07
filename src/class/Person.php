<?php

class Person
{
    public function __construct(public string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "hello $name, my name is $this->name";
    }
}

$person = new Person("john doe");

$reference1 = $person->sayHello(...);
$reference2 = array_sum(...);

echo <<<MULTILINE
{$reference1("david wilson")}
{$reference2([10, 10, 10, 10, 10])}
MULTILINE;
