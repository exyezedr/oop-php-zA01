<?php

class Manager
{
    public string $name;

    public function sayHello(string $name): string
    {
        return "hello $name, my name is $this->name (manager)";
    }
}
