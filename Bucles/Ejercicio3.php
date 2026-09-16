<?php
$limite=8;
$contador=0;
$resultado=0;
if($limite> 0)
    {
        while($contador<=$limite)
            {
                $resultado=$resultado + $contador;
                $contador++;
            }
        echo $resultado;
    }
else
    {
        echo "El limite no es valido";
    }


?>