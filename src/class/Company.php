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
    return "hello $programmer->name";
}

$company = new Company();
echo json_encode($company) . "\n";

$company->programmer = new Programmer("john doe");
echo json_encode($company) . "\n";

$company->programmer = new BackendProgrammer("jane doe");
echo json_encode($company) . "\n";

$company->programmer = new FrontendProgrammer("david wilson");
echo json_encode($company) . "\n";

echo sayHello(new Programmer("john doe")) . "\n";
echo sayHello(new BackendProgrammer("jane doe")) . "\n";
echo sayHello(new FrontendProgrammer("david wilson")) . "\n";
