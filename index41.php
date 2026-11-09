<?php
$notas=[7,8,4,5,9,10,7,6];
$soma=0;
$quantidade=count($notas);


foreach ($notas as $contador){
    $soma+=$contador;
}

$media=$soma/$quantidade;
echo"A media da turma é:$media\n";

foreach($notas as $nota){
    if($nota>$media){
        echo"Nota maior que a média: $nota\n";
    }
}







?>