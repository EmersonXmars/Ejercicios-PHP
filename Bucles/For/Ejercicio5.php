<?php
$multDe3=0;
$multDe5=0;
$multDe3Y5=0;
for ($i=1; $i <=50 ; $i++) { 
    if($i % 3 ==0 && $i % 5 ==0)
        {
            $multDe3Y5++;
        }
    elseif($i % 3 ==0)
        {
            $multDe3++;
        }
    elseif($i % 5==0)
        {
         $multDe5++;  
        }
}
echo "Multiplos de 3: $multDe3 \n";
echo "Multiplos de 5: $multDe5 \n";
echo "Multiplos de ambos: $multDe3Y5 \n";


?>
