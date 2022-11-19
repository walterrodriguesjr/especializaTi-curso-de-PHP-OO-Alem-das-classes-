<?php

class Conta 
{
    var $name;
    var $number;

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . "<br>";
    }

    public function setNumber(String $number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number . "<br>";
    }
}

class ContaPfis extends Conta
{
    var $cpf;

    public function setCpf(String $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf . "<br>";
    }

    public function getData()
    {
        return "Nome: {$this->name}, <br> Número: {$this->number}, <br> CPF: {$this->cpf} <hr>";
    }
}

class ContaPJUR extends Conta
{
    var $cnpj;

    public function setName(String $name)
    {
        $this->name = strtoupper($name);
    }
    
    public function setCnpj(String $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj . "<br>";
    }

    public function getData()
    {
        return "Nome: {$this->name}, <br> Número: {$this->number}, <br> CNPJ: {$this->cnpj} <hr>";
    }

}

$carlos = new ContaPfis;
$carlos->setName("Carlos");
$carlos->setNumber(1111);
$carlos->setCpf(1212121212);
echo $carlos->getData();

$especializati = new ContaPJUR;
$especializati->setName('EspecializaTi');
$especializati->setNumber('44343434343443');
$especializati->setCnpj('8000111111111');
echo $especializati->getData();
