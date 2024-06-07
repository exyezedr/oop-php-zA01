<?php

function zero(mixed $data): mixed
{
    if (is_int($data)) {
        return $data;
    } else if (is_string($data)) {
        return $data;
    } else if (is_array($data)) {
        return $data;
    }
}

echo gettype(zero(10)) . "\n";
echo gettype(zero("10")) . "\n";
echo gettype(zero([10])) . "\n";
