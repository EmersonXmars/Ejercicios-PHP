<?php
//Guardar valores filtrados en un arrays
$listaSucia=[21,2,4,56,78,90,7];
$listaLimpia=[];
foreach ($listaSucia as $indice => $valor) {
    if($valor >=20)
        {
            $listaLimpia[]=$valor;
        }
}

foreach($listaLimpia as $value)
    {
        echo "$value\n";
    }

/*
$lista=[];
$contador=1;
while($contador <=10)
    {
        $lista[]=$contador;
        $contador++;
    }
foreach($lista as $value)
    {
        echo "$value\n";
    }
        */
?>