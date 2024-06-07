<?php

interface HasBrand
{
    public function getBrand(): string;
}

interface IsExpensive
{
    public function IsExpensive(): bool;
}

interface Car extends HasBrand, IsExpensive
{
    public function drive(): string;

    public function getTire(): int;
}

interface IsMaintenance
{
    public function isMaintenance(): bool;
}

class Tesla implements Car, IsMaintenance
{
    public function drive(): string
    {
        return "drive tesla";
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "tesla";
    }

    public function IsExpensive(): bool
    {
        return true;
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}

function getInfo(HasBrand & IsExpensive $car): string
{
    return "{$car->getBrand()} | {$car->getTire()}";
}

$car = new Tesla();

echo <<<MULTILINE
{$car->drive()}
{$car->getTire()}
{$car->getBrand()}\n
MULTILINE;

echo json_encode($car->isExpensive()) . "\n";
echo json_encode($car->isMaintenance()) . "\n";
echo getInfo($car);
