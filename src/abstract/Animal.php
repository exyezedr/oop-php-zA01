<?php

class Food
{
}

class AnimalFood extends Food
{
}

abstract class Animal
{
    public string $name;

    abstract public function run(): string;

    abstract public function eat(AnimalFood $food): string;
}

class Cat extends Animal
{
    public function run(): string
    {
        return "cat $this->name is running";
    }

    public function eat(AnimalFood $food): string
    {
        return "cat $this->name is eating";
    }
}

class Dog extends Animal
{
    public function run(): string
    {
        return "dog $this->name is running";
    }

    public function eat(Food $food): string
    {
        return "dog $this->name is eating";
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

$cat = $catShelter->adopt("appa");
$dog = $dogShelter->adopt("appu");

echo <<<MULTILINE
{$cat->eat(new AnimalFood())}
{$dog->eat(new Food())}\n
MULTILINE;
