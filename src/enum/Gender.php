<?php

interface SayHello
{
    public function sayHello(): string;
}

trait Indonesia
{
    public function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "saudara",
            Gender::Female => "saudari",
        };
    }

    static public function fromIndonesia(string $gender): Gender
    {
        return match ($gender) {
            "saudara" => Gender::Male,
            "saudari" => Gender::Female,
            default => throw new Exception("invalid gender $gender"),
        };
    }
}

enum Gender: string implements SayHello
{
    use Indonesia;

    case Male = "mr.";
    case Female = "mrs.";

    const string AUTHOR = "anonymous";

    public function sayHello(): string
    {
        return "hello $this->value";
    }
}

echo Gender::AUTHOR . "\n";
echo Gender::Male->sayHello() . "\n";
echo Gender::Female->sayHello() . "\n";
echo Gender::Male->inIndonesia() . "\n";
echo Gender::Female->inIndonesia() . "\n";
echo json_encode(Gender::fromIndonesia("saudara")) . "\n";
echo json_encode(Gender::fromIndonesia("saudari")) . "\n";
