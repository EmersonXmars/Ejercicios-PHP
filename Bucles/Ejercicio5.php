<?php
$contador=1;
$nota=0;
$desaprobados=0;
$aprobados=0;
$excelentes=0;
while($contador<=5)
    {
        if($contador == 1)
            {
                $nota=8;
                $contador++;
                
            }
        elseif($contador == 2)
            {
                $nota=15;
                $contador++;
                
            }
        elseif($contador == 3)
            {
                $nota=19;
                $contador++;
                
            }  
        elseif($contador == 4)
            {
                $nota=11;
                $contador++;
                
            }    
        elseif($contador == 5)
            {
                $nota=6;
                $contador++;
                
            }

    //contadores
        if($nota>=0 && $nota<=10)
            {
                $desaprobados++;
            }
        elseif($nota>=11 && $nota <=17)
            {
                $aprobados++;
            }
        elseif($nota>=18 && $nota<=20)
            {
                $excelentes++;
            }
    }
    echo $desaprobados."\n";
    echo $aprobados. "\n";
    echo $excelentes. "\n";

?>