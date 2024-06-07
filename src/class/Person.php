<?php

class Address
{
    public ?string $country;
}

class Person
{
    public ?Address $address;
}

$address = new Address();
$person = new Person();

$address->country = "indonesia";
$person->address = $address;

function getCountry(?Person $person): ?string
{
    return $person?->address?->country ?? "country not found";
}

echo getCountry($person) . "\n";
echo getCountry(null) . "\n";
