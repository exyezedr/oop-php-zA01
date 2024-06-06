<?php

class Data implements IteratorAggregate
{
    public int $first = 1;
    private int $second = 2;
    protected int $third = 3;

    public function getIterator(): Iterator
    {
        yield "second" => $this->second;
        yield "third" => $this->third;
    }
}

function even(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 === 0) {
            yield $i;
        }
    }
}

foreach (new Data() as $key => $number) {
    echo "$key = $number\n";
}

foreach (even(10) as $number) {
    echo "$number\n";
}
