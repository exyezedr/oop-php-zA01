<?php

class Shape
{
    public function getCorner(): int
    {
        return 11;
    }
}

class Rectangle extends Shape
{
    public function getCorner(): int
    {
        return 10;
    }

    public function getParentCorner(): string
    {
        return "parent " . parent::getCorner() . " | this {$this->getCorner()}";
    }
}

$shape = new Shape();
$rectangle = new Rectangle();

echo <<<MULTILINE
{$shape->getCorner()}
{$rectangle->getCorner()}
{$rectangle->getParentCorner()}\n
MULTILINE;
