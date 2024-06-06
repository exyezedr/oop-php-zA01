<?php

class Data implements IteratorAggregate
{
    public int $first = 1;
    private int $second = 2;
    protected int $third = 3;

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator(["second" => $this->second, "third" => $this->third]);
    }
}

function even(int $max): ArrayIterator
{
    $array = [];

    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 === 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (new Data() as $key => $number) {
    echo "$key = $number\n";
}

foreach (even(10) as $number) {
    echo "$number\n";
}
