<?php

abstract class Animal
{
    public string $name;

    abstract public function run(): string;
}

class Cat extends Animal
{
    public function run(): string
    {
        return "cat $this->name is running";
    }
}

class Dog extends Animal
{
    public function run(): string
    {
        return "dog $this->name is running";
    }
}

$cat = new Cat();
$dog = new Dog();

$cat->name = "appa";
$dog->name = "appu";

echo <<<MULTILINE
{$cat->run()}
{$dog->run()}\n
MULTILINE;
