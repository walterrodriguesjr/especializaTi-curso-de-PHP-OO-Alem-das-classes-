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
                {$this->price}, <hr>";
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setDescription($description)
    {
        $this->description = $description;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }
    
    function setWeight($weight)
    {
        $this->weight = $weight;
    }
}

$tv = new Product;
/* ENTRADA DE DADOS */
$tv->setName('TV');
$tv->setDescription('55 polegadas');
$tv->setPrice(5000);
/* RETORNO DE DADOS */
echo $tv->get();


$geladeira = new Product;
/* ENTRADA DE DADOS */
$geladeira->setName('Geladeira');
$geladeira->setDescription('Degelo Automático');
$geladeira->setPrice(2900);
/* RETORNO DE DADOS */
echo $geladeira->get();

$microondas = new Product;
/* ENTRADA DE DADOS */
$microondas->setName('Microondas');
$microondas->setDescription('oito temperaturas');
$microondas->setPrice(4000);
$microondas->setWeight(11);
/* RETORNO DE DADOS */
echo $microondas->get();
