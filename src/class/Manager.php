<?php

class Manager
{
    public string $name;
    public string $title;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function sayHello(string $name): string
    {
        return "hello $name, my name is $this->name ($this->title)";
    }
}

class VicePresident extends Manager
{
    public string $secondTitle;

    public function __construct(string $name, string $title)
    {
        parent::__construct($name, "vice president");

        $this->secondTitle = $title;
    }

    public function sayHello(string $name): string
    {
        return "hello $name, my name is $this->name ($this->title and $this->secondTitle)";
    }
}

$manager = new Manager("john doe", "manager");
$vicePresident = new VicePresident("david wilson", "executive director");

echo <<<MULTILINE
{$manager->sayHello($vicePresident->name)}
{$vicePresident->sayHello($manager->name)}\n
MULTILINE;
