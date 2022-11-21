<?php

class Endereco
{
    public $rua;
    public $bairro;
}

class User
{
    public $name;
    private $endereco;

    public function setEndereco($rua, $bairro)
    {
        $endereco = new Endereco();
        $endereco->rua = $rua;
        $endereco->bairro = $bairro;

        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return "Endereco: rua {$this->endereco->rua}, bairro: {$this->endereco->bairro}";
    }
}

$carlos = new User;
$carlos->name = 'Carlos';
$carlos->setEndereco('Rua x', 'Bairro y');
echo $carlos->getEndereco();

