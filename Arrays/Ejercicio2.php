<?php
$numeros = [4, 7, 10, 13, 20];

foreach($numeros as $value)
    {
        if($value % 2 ==0)
            {
                echo "$value es par \n";
            }
        elseif($value % 2 != 0)
            {
                echo "$value es impar \n";
            }
    }

?>