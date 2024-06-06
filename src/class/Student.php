<?php

class Student
{
    public string $name;
    private string $city;

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    // if you want only some property
    public function __clone(): void
    {
        unset($this->city);
    }
}

$student1 = new Student();

$student1->name = "john doe";

$student1->setCity("surabaya");

$student2 = clone $student1;

var_dump($student1);
var_dump($student2);
