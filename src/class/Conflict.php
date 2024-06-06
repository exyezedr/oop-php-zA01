<?php

trait Conflict1
{
    public function doA(): string
    {
        return "a";
    }

    public function doB(): string
    {
        return "b";
    }
}

trait Conflict2
{
    public function doA(): string
    {
        return "A";
    }

    public function doB(): string
    {
        return "B";
    }
}

class Conflict
{
    use Conflict1, Conflict2 {
        Conflict1::doA insteadof Conflict2;
        Conflict2::doB insteadof Conflict1;
    }
}

$conflict = new Conflict();

echo <<<MULTILINE
{$conflict->doA()}
{$conflict->doB()}\n
MULTILINE;
