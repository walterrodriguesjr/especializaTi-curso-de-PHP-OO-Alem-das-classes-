<?php 

class Product
{
    var $name;
    var $description;
    var $price;

    function __construct($name, $description, $price)
    {
       $this->name = $name;
       $this->description = $description;
       $this->price = $price;
    }

    function get()
    {
        return "{$this->name}, {$this->description}, {$this->price} <hr>";
    }
}

$product1 = new Product('TV', 'Amoled', 1000);
echo $product1->get();

$product2 = new Product('geladeira', '50 litros', 10000);
echo $product2->get();

