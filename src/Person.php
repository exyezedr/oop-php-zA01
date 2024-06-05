<?php

class Person
{
    public string $name = "anonymous";
    public ?string $city;

    public function sayHello(string $name): string
    {
        return "hello $name";
    }
}

$person = new Person();

$person->city = null;

echo <<<MULTILINE
name = $person->name
city = $person->city
{$person->sayHello("david wilson")}\n
MULTILINE;
