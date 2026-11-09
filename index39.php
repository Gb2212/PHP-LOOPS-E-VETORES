<?php
$numeros=[67,54,3,6,9,20,34,64,32,12];
$maior=1;
$menor=[0];

foreach($numeros as $contador){
    if($contador>$maior){
        $maior=$contador;
    }
      if($contador<$menor){
        $menor=$contador;
      }  
}

echo"O maior numero é:$maior\n";
echo"O menor valor é:$menor";



?>