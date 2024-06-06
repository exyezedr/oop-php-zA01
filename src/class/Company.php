<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHello(Programmer $programmer): string
{
    if ($programmer instanceof BackendProgrammer) {
        return "hello $programmer->name (backend programmer)";
    } else if ($programmer instanceof FrontendProgrammer) {
        return "hello $programmer->name (frontend programmer)";
    } else {
        return "hello $programmer->name (programmer)";
    }
}

echo sayHello(new Programmer("john doe")) . "\n";
echo sayHello(new BackendProgrammer("jane doe")) . "\n";
echo sayHello(new FrontendProgrammer("david wilson")) . "\n";
