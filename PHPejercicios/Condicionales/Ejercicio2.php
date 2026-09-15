<?php
$nota=20;
if($nota>=18 && $nota<=20)
    {
        echo"Excelente";
    }
elseif($nota>=14 && $nota<=17)
    {
        echo"Bueno";
    }
elseif($nota>=11 && $nota<=13)
    {
     echo "Aprobado";
    }
elseif($nota>=0 && $nota<=10)
    {
        echo "Desaprobado";
    }
else
    {
        echo"Numero no valido debe ser del rango 0 a 20";
    }

?>