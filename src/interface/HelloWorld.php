<?php

interface HelloWorld
{
    public function sayHello(string $name): string;
}

$helloWorld = new class("john") implements HelloWorld
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function sayHello(string $name): string
    {
        return "hello $name, my name is $this->name";
    }
};

$helloWorld->setName("john doe");

echo "{$helloWorld->sayHello("david wilson")}\n";
