<?php 

class Escola
{
    const PID = 'asushasuhaus';
    private static $saldo = 0.0;

    static public function getSaldo()
    {
        return self::$saldo;
    }
    static public function addSaldo($saldo)
    {
        self::$saldo += $saldo;
    }
}

class Aluno
{
    public $name;
    private $saldo = 0.0;

    public function addSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function novaCompra($valor)
    {
        if($this->saldo >= $valor){
           $this->saldo -= $valor;
           Escola::addSaldo($valor);
        }else{
            echo "Saldo insuficiente." . "<br>";
        }
    }
}

$aluno01 = new Aluno;
$aluno01->name = "Carlos";
echo $aluno01->getSaldo() . "<br>";
$aluno01->addSaldo(50.0);
echo $aluno01->getSaldo() . "<br>";
$aluno01->novaCompra(20);
echo $aluno01->getSaldo() . "<br>";
echo Escola::getSaldo();