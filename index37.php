<?php
$numeros=[2,3,4,5,6,7,8,9,1,10];
$pares=0;
$impares=0;


foreach($numeros as $contador){
    if($contador%2==0){
        $pares++;
    }
    else{
        $impares++
        ;}
}

echo"Pares:$pares\n";
echo"Impares:$impares\n";






?>