<?php
$numeros= [2, 5, 7];

foreach($numeros as $contador){
    echo"Tabuada do $contador\n";

    for($i=1;$i<=10;$i++){
        $resultado=$contador *$i;
        echo"$contador x $i=$resultado\n";
    }
    echo"\n";
}






?>