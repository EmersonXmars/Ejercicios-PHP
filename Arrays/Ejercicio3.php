<?php
$numeros = [5, 10, 3, 7, 15];
$resultado=0;
foreach($numeros as $value)
    {   
        $resultado = $resultado + $value;
    }
echo "La suma total es $resultado";
?>