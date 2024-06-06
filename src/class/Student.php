<?php

class Student
{
    public string $name;
    private string $city;

    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}

$student1 = new Student();
$student2 = new Student();

$student1->name = "john doe";
$student1->setCity("surabaya");

$student2->name = "john doe";
$student2->setCity("surabaya");

echo json_encode($student1 == $student2) . "\n";
echo json_encode($student1 === $student2) . "\n";
echo json_encode($student1 === $student1) . "\n";
