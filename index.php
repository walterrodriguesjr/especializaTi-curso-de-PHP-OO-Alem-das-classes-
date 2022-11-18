<?php

class Product
{
    var $name;
    var $description;
    var $price;

    function get()
    {
        return "{$this->name},
                {$this->description},
                {$this->price} <hr>";
    }
}

$tv = new Product;
$tv->name = 'TV';
$tv->description = 'Smart TV';
$tv->price = 4500;
echo $tv->get();


$geladeira = new Product;
$geladeira->name = 'Geladeira';
$geladeira->description = 'Degelo Automático';
$geladeira->price = 2900;
echo $geladeira->get();

$microondas = new Product;
$microondas->name = "Microondas";
$microondas->description = "oito temperaturas";
$microondas->price = 4000;
$microondas->weight = 10;
echo $microondas->get();
