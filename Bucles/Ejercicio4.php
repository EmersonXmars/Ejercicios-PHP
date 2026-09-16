<?php
$numero=7;
$contador=0;
$resultado=0;
if($numero>0)
    {
        while($contador<=12)
            {
                $resultado=$numero * $contador;
                if($resultado < 20)
                    {
                        echo "$numero * $contador = $resultado -- Menor que 20"."\n";
                    }
                elseif($resultado>=20 && $resultado <=50)
                    {
                        echo "$numero * $contador = $resultado -- Entre 20 y 50"."\n";
                    }
                elseif($resultado>50)
                    {
                        echo "$numero * $contador = $resultado -- Mayor que 50"."\n";
                    }
                
                $contador++;
            }
    }
else
    {
        echo "Numero invalido";
    }


?>