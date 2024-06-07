<?php

function sayHello(Customer $customer): string
{
    return "hello" . match ($customer->gender) {
        Gender::Male => " {$customer->gender->value} $customer->name",
        Gender::Female => " {$customer->gender->value} $customer->name",
        default => " $customer->name",
    };
}

// like alias
enum Gender: string
{
    case Male = "mr.";
    case Female = "mrs.";
}

class Customer
{
    public function __construct(public string $name, public ?Gender $gender)
    {
    }
}

echo sayHello(new Customer("john doe", Gender::from("mr."))) . "\n";
echo sayHello(new Customer("jane doe", Gender::from("mrs."))) . "\n";
echo sayHello(new Customer("david wilson", Gender::tryFrom("wrong"))) . "\n";
