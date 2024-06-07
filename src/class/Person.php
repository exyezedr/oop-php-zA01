<?php

class Person
{
    public function __construct(
        public readonly string $name,
        public readonly string $city,
    ) {
        echo json_encode($this) . "\n";
    }
}

$person = new Person("john doe", "surabaya");
