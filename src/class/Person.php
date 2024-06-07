<?php

class Person
{
    public function __toString(): string
    {
        return "person";
    }
}

function sayHello(Stringable $stringable): void
{
    echo "hello {$stringable->__toString()}\n";
}

sayHello(new Person());
