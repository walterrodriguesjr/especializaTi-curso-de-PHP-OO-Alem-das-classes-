<?php 

class myClass 
{
    private $name;
    private $cpf;
    private $age;

    public function __set($name, $value)
    {
        $this->name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

$obj = new myClass;
$obj->name = "Walter";
$obj->cpf = "34040011848";
$obj->age = 36;
echo $obj->name;

