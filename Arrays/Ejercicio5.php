<?php
$productos = ["Pan", "Leche", "Arroz", "Azúcar"];
$precios = [2.5, 4.2, 3.8, 4.5];

foreach($productos as $indice=>$valor)
    {
        if($precios[$indice] < 3)
        echo "$valor - S/".$precios[$indice]." Barato \n";     
        elseif($precios[$indice] >= 3 && $precios[$indice] <=4)
            {
               echo "$valor - S/".$precios[$indice]." Normal \n";   
            }
        elseif($precios[$indice] >4 )
            {
                echo "$valor - S/".$precios[$indice]." Caro \n";  
            }
    }
?>