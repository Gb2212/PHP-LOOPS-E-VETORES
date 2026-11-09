<?php
$numeros=[10,20,30,40,50];

foreach($numeros as &$contador){
    $contador*=2;
}
unset($contador);

print_r($numeros);





?>