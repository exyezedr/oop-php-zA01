<?php

class Person
{
    const string AUTHOR = "anonymous";

    public string $name;

    public function sayHello(?string $name): string
    {
        return "hello" . ($name ? " $name" : "") . ", my name is $this->name";
    }

    public function infoSelf(): string
    {
        return self::AUTHOR;
    }

    public function infoClass(): string
    {
        return Person::AUTHOR;
    }
}

$person1 = new Person();
$person2 = new Person();

$person1->name = "john doe";
$person2->name = "david wilson";

echo Person::AUTHOR . "\n";

echo <<<MULTILINE
{$person1->sayHello($person2->name)}
{$person2->sayHello(null)}
{$person1->infoSelf()}
{$person2->infoClass()}\n
MULTILINE;
