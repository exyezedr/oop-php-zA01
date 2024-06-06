<?php

class Person
{
    public string $name;
    public string $city;

    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;

        echo json_encode($this) . "\n";
    }

    public function __destruct()
    {
        echo "object person $this->name destroyed\n";
    }
}

$person = new Person("john doe", "surabaya");
