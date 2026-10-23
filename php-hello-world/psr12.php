<?php
trait Logger
{
    public function log($message)
    {
        echo "[LOG]: " . $message . "<br>";
    }
}

class User
{
    use Logger;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function login()
    {
        $this->log("User {$this->name} has logged in.");
    }
}

class Product
{
    use Logger;

    private $productName;

    public function __construct($productName)
    {
        $this->productName = $productName;
    }

    public function display()
    {
        $this->log("Displaying product: {$this->productName}");
    }
}

$user = new User("Alice");
$user->login();
$user->log("This is a custom log message.");

$product = new Product("Laptop");
$product->display();
$product->log("This is another custom log message for the product.");
