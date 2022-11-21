<?php 

class Pessoa
{
    private $name;

    public function setname($name){
        $this->name = $name;
    }

    public function getname()
    {
        return $this->name;
    }
}


$carlos = new Pessoa;
echo $carlos->setname("Carlos");
echo $carlos->getname();
