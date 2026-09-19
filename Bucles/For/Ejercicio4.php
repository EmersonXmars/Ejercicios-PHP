<?php
$numero=5;
$resultado=0;
for ($i=1; $i <= 12; $i++) { 
    $resultado=$numero * $i;
    if($resultado <20)
    echo "$numero * $i = $resultado Bajo \n";
    elseif($resultado >=20 && $resultado <=50)
        {
          echo "$numero * $i = $resultado Medio \n";  
        }
    elseif($resultado >50)
        {
            echo "$numero * $i = $resultado Alto \n";
        }
}
?>