<?php

function stop(): never
{
    echo "stop\n";

    exit;
}

stop();

echo "hello\n";
