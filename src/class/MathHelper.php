<?php

class MathHelper
{
    static public string $name = "math helper";

    static public function sum(int ...$values): int
    {
        return array_sum($values);
    }
}

echo MathHelper::$name . "\n";
echo MathHelper::sum(10, 10, 10, 10, 10) . "\n";
