<?php
class CuentaBancaria
{
    private $titular;
    private $saldo;

    public function __construct($titular,$saldo) 
    {
        $this->setTitular($titular);
        $this->setSaldo($saldo);
    }

    public function setTitular($titular)
    {
        if(!empty(trim($titular))) //¿No esta vacio?
            //Si,no esta vacio
            {
                $this->titular=$titular;  
            }
        else
            {
                echo "Dato invalido\n";
            }
    }
    public function setSaldo($saldo)
    {
        if($saldo >=0)
            {
                $this->saldo=$saldo;
            }
        else
            {
                echo "Monto no valido";
            }
    }
    public function getTitular()
    {
        return $this->titular;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($monto)
    {
        if($monto>0)
            {
                $this->saldo += $monto;

            }
        else
            {
                echo "Cantidad no valida\n";
            }
    }
    public function retirar($monto)
    {
        if($monto <=$this->saldo && $monto >0)
            {
                $this->saldo -= $monto;
            }
        else
            {
                echo"Intenta retirar: $monto \n";
                echo"Fondos insuficientes \n";
                
            }
    }
    public function mostrarCuenta()
    {
        echo "Titular: ".$this->titular;
        echo "Saldo: ".$this->saldo;

    }

}

$cuenta1= new CuentaBancaria("Lucas",100);

$cuenta1->depositar(100);
$cuenta1->retirar(500);
echo $cuenta1->getSaldo();
?>