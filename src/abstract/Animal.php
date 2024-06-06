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

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();

        $cat->name = $name;

        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();

        $dog->name = $name;

        return $dog;
    }
}

$catShelter = new CatShelter();
$dogShelter = new DogShelter();

echo <<<MULTILINE
{$catShelter->adopt("appa")->run()}
{$dogShelter->adopt("appu")->run()}\n
MULTILINE;
