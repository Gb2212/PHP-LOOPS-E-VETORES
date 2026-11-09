<?php
$numeros=[1,2,3,4,5,6,7,8,9,10];
$pares=[];
$impares=[];
foreach($numeros as $contador){
if ($contador%2==0){
    $pares[]=$contador;
}
elseif($contador%2!=0){
    $impares[]=$contador;
}

}
echo "Pares: ";
print_r($pares);

echo "\nÍmpares: ";
print_r($impares);






?>