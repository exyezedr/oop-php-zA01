<?php

trait HasName
{
    public string $name;
}

trait SayHello
{
    public function sayHello(?string $name): string
    {
        return "hello" . ($name ? " $name" : "") . ", my name is $this->name";
    }
}

trait CanRun
{
    abstract public function run(): string;
}

trait All
{
    use SayHello, HasName, CanRun;
}

class Person
{
    use All;

    public function run(): string
    {
        return "$this->name is running";
    }
}

$person = new Person();

$person->name = "john doe";

echo <<<MULTILINE
{$person->sayHello("david wilson")}
{$person->run()}\n
MULTILINE;
