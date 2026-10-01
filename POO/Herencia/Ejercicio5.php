<?php
class Cuenta
{
    protected $titular;
    protected $saldo;

    public function __construct($titular,$saldo=0) {
        $this->setTitular($titular);
        $this->saldo=$saldo;
    }

    public function setTitular($titular)
    {
        if(!empty(trim($titular)))
            {
                $this->titular=$titular;
            }
        else
            {
                echo "No valido";
            }
    }

    public function getTitular()
    {
        //aqui tengo una duda, estoy obligado a colocar getTitular siempre que use setTitular?
        return $this->titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($monto)
    {
        if(is_numeric($monto) && $monto>0)
            {
                $this->saldo +=$monto;
            }
        else
            {
                echo "Monto no valido";
            }
    }

    public function retirar($monto)
    {
        if(is_numeric($monto) && $monto>0)
            {
                if($monto <= $this->saldo)
                    {
                        $this->saldo-=$monto;
                    }
                else
                    {
                        echo "El monto que desea retirar supera su saldo";
                    }
            }
        else
            {
                echo "Monto no valido";
            }
    }

}

class CuentaAhorros extends Cuenta
{
    protected $movimientos;

    public function __construct($titular,$saldo,$movimientos) {
        parent::__construct($titular,$saldo);
        $this->movimientos=$movimientos;
    }

    public function procesarMovimientos()
    {
        foreach ($this->movimientos as $valor) {
             if($valor >0)
                {
                    $this->depositar($valor);
                }
            elseif($valor <0)
                {
                    $numeroLimpio=abs($valor);
                    $this->retirar($numeroLimpio);
                }
            else
                {
                    echo "No valido";
                }
        }
    }

    public function contarDepositos()
    {
        $contador=0;
        foreach ($this->movimientos as $valor) 
        {

             if($valor >0)
                {
                    $contador++;
                }
            
        
        }
        echo "Cantidad de depositos: $contador\n";
    }

    
    public function contarRetiros()
    {
        $contador=0;
        foreach ($this->movimientos as $valor) 
        {

             if($valor <0)
                {
                    $contador++;
                }
        }
        echo "Cantidad de retiros: $contador\n";
    }

    public function calcularSaldoFinal()
    {
        echo "Saldo Final: ".$this->saldo;
    }

}


$persona = new CuentaAhorros("Juan",100,[100, -50, 200, -30]);
$persona->procesarMovimientos();
$persona->contarDepositos();
$persona->contarRetiros();
$persona->calcularSaldoFinal();


?>