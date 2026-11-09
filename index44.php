<?php

$numeros = [2, 5, 2, 8, 5, 10, 8, 12];

$distintos = [];


foreach ($numeros as $numero) {
    $encontrado = false; 

    
    foreach ($distintos as $item) {
        if ($item == $numero) {
            $encontrado = true;
            break; 
        }
    }

    
    if (!$encontrado) {
        $distintos[] = $numero;
    }
}


echo "Vetor original: ";
print_r($numeros);

echo "\nVetor sem repetições (mantendo a ordem): ";
print_r($distintos);
?>
