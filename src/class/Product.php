<?php

class Product
{
    private string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // if inside a parent class, any visibility is accessible
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function info(): string
    {
        /**
         * the code below is not accessible to the child and from the outside (private)
         * return $this->name;
         * ==================================================
         * $price can be accessed by its child (protected)
         * ==================================================
         * getName() can be accessed anywhere (public)
         */
        return "{$this->getName()} | $this->price";
    }
}

$product = new Product("apple", 20000);
$dummy = new ProductDummy("samsung", 30000);

/**
 * the code below is not accessible from outside (private and protected)
 * echo <<<MULTILINE
 * $product->name
 * $product->price\n
 * MULTILINE;
 * ==================================================
 * getName(), getPrice(), and info() accessible anywhere (public)
 */
echo <<<MULTILINE
{$product->getName()} | {$product->getPrice()}
{$dummy->info()}\n
MULTILINE;
