<?php
$limite=8;
$resultado=0;
if($limite>=1)
    {
        for ($i=1; $i <= $limite ; $i++) { 
                $resultado=$resultado+ $i;

        }
        echo $resultado;

    }
    else
        {
            echo "El limite no es valido";
        }


?>