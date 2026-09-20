<?php
$ventas = [
    "Ana" => [120, 200, 150],
    "Luis" => [80, 90, 110],
    "Carlos" => [300, 250, 400]
];
/*$contador=0;
foreach($ventas as $indice => $valor)
    {
        foreach($valor as $value)
            {
                $resultado= $valor[0] + $valor[1] + $valor[2];
                $contador++;
                if($contador==1)
                    {
                        echo "$indice - Total vendido: $resultado";
                        if($resultado <300)
                        {
                            echo " - Tuvo una Baja venta"."\n"; 
                        }
                        elseif($resultado >=300 && $resultado <=700)
                        {
                            echo " - Tuvo una Media venta"."\n"; 
                        }
                         elseif($resultado >700)
                        {
                            echo " - Tuvo una Alta venta"."\n";                         
                        }
                            $contador=0;
                            break;
                    }
                


            }
    }
*/
foreach($ventas as $indice => $valor)
    {
        $total=0;
        foreach($valor as $value)
            {
                $total =$total + $value;
            }
            if($total <300)
                {
                    echo "$indice: S/$total - Tuvo una Baja venta"."\n"; 
                }
            elseif($total >=300 && $total <=700)
                {
                    echo "$indice: S/$total - Tuvo una Media venta"."\n"; 
                }
            elseif($total >700)
                {
                    echo "$indice: S/$total - Tuvo una Alta venta"."\n";                         
                }
    }
?>
