<?php

class Data
{
    public int $first = 1;
    private int $second = 2;
    protected int $third = 3;
}

foreach (new Data() as $key => $number) {
    echo "$key = $number\n";
}
