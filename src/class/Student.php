<?php

class Student
{
    public string $name;
    public string $value;

    public function __toString(): string
    {
        return "$this->name | $this->value";
    }

    public function __invoke(mixed ...$arguments): string
    {
        return "calling 'student' with arguments [" . join(", ", $arguments) . "]";
    }

    public function __debugInfo(): array
    {
        return [
            "name" => $this->name,
            "value" => $this->value,
            "author" => "john doe",
            "version" => 10,
        ];
    }
}

$student = new Student();

$student->name = "david wilson";
$student->value = 10;

echo <<<MULTILINE
$student
{$student("john doe", 10, 10.10)}\n
MULTILINE;

echo "==================================================\n";

var_dump($student);
