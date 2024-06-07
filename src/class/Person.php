<?php

class Person
{
    public function __construct(
        public string $name,
        public string $city,
        public string $country
    ) {
        echo json_encode($this) . "\n";
    }
}

$person = new Person("john doe", "surabaya", "indonesia");
