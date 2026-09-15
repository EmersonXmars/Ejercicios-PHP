<?php
$edad= 16;
$esEstudiante = true;
$precio=0;
if($edad < 5)
    {
        $precio=0;
    }
elseif($edad>=5 && $edad <=12)
    {
        $precio =10;
    }
elseif($edad >=13 && $edad<=17)
    {
        if($esEstudiante == true)
            {
                $precio=15;
            }
        else
            {
                $precio=20;
            }
    }
elseif($edad >=18 && $edad <=59)
    {
        if($esEstudiante == true)
            {
                $precio=25;
            }
        else
            {
                $precio=30;
            }
  
    }
elseif($edad>=60)
    {
        $precio=12;
    }
    else
        {
            echo"\n Edad invalida";
        }

echo "Edad: ".$edad;
echo "\nPrecio de entrada: ".$precio; 


?>