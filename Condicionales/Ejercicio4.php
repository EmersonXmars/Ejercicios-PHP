<?php
$lado1=6;
$lado2=5;
$lado3=4;

if($lado1 + $lado2 >$lado3 && $lado2 + $lado3>$lado1 && $lado3 + $lado1>$lado2)
    {
        echo "Es un triangulo". "\n";
        if($lado1 == $lado2 && $lado1== $lado3)
            {
                echo "Es un triangulo equilatero";
            }
        elseif($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3)
            {
                echo "Es un triangulo isoceles";
            }
        elseif($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3)
            {
                echo "Es un triangulo escaleno";
            }

    }
    else
        {
            echo "No se puede formar un triángulo";
        }

?>