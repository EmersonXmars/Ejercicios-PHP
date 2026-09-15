<?php
$compra=500;
$descuento=0;
$total=0;
if($compra<100 && $compra>=1)
    {
        echo "Gracias por su compra";
    }
elseif($compra>=100 && $compra<300)
    {   
        $descuento=$compra * 0.1;
        $total=$compra-$descuento;
        echo "Compra:S/".$compra."\n";
        echo "Descuento:S/".$descuento."\n";
        echo "Total:S/".$total."\n";
    }
elseif($compra>=300 && $compra<500)
    {
        $descuento=$compra * 0.15;
        $total=$compra-$descuento;
        echo "Compra:S/".$compra."\n";
        echo "Descuento:S/".$descuento."\n";
        echo "Total:S/".$total."\n";
    }
elseif($compra>=500)
    {
        $descuento=$compra * 0.2;
        $total=$compra-$descuento;
        echo "Compra:S/".$compra."\n";
        echo "Descuento:S/".$descuento."\n";
        echo "Total:S/".$total."\n";
    }
else
    {
        echo "No se aceptan numeros negativos";
    }
?>