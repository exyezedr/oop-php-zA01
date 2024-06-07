<?php

function sayHello(Customer $customer): string
{
    return "hello" . match ($customer->gender) {
        Gender::Male => " mr. $customer->name",
        Gender::Female => " mrs. $customer->name",
    };
}

enum Gender
{
    case Male;
    case Female;
}

class Customer
{
    public function __construct(public string $name, public Gender $gender)
    {
    }
}

echo sayHello(new Customer("john doe", Gender::Male)) . "\n";
echo sayHello(new Customer("jane doe", Gender::Female)) . "\n";

echo "==================================================\n";

var_dump(Gender::cases());
