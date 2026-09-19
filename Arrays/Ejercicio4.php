<?php
$notas = [8, 15, 19, 11, 6, 20];
$aprobados=0;
$desaprobados=0;
$excelentes=0;
foreach($notas as $value)
    {
        if($value >=0 && $value <=10)
            {
                $desaprobados++;
            }
        elseif($value>=11 && $value <=17)
            {
             $aprobados++;
            }
        elseif($value>=18 && $value <=20)
            {
                $excelentes++;
            }

    }
echo "Excelentes: $excelentes \n";
echo "Aprobados: $aprobados \n";
echo "Desaprobados: $desaprobados \n";
?>