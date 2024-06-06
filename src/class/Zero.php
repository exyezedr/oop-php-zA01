<?php

class Zero
{
    private array $properties = [];

    public function __get(string $name): mixed
    {
        return $this->properties[$name];
    }

    public function __set(string $name, mixed $value): void
    {
        $this->properties[$name] = $value;
    }

    public function __isset(string $name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset(string $name): void
    {
        unset($this->properties[$name]);
    }

    public function __call(string $name, mixed $arguments): string
    {
        return "hello function $name with arguments [" . join(", ", $arguments) . "]";
    }

    static public function __callStatic(string $name, mixed $arguments): string
    {
        return "hello static function $name with arguments [" . join(", ", $arguments) . "]";
    }
}

$zero = new Zero();

$zero->name = "john doe";

echo "$zero->name\n";
echo json_encode(isset($zero->name)) . "\n";

unset($zero->name);

echo json_encode(isset($zero->name)) . "\n";

echo <<<MULTILINE
{$zero->sayHello("john doe", 10, 10.10)}
{$zero::sayHello("john doe", 10, 10.10)}\n
MULTILINE;
