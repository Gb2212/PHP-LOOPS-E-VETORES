<?php

$vetor = [4, 7, 11, 15, 23, 32, 37, 40, 53, 60];

function eh_primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    
    $divisor = 2;
    while ($divisor * $divisor <= $numero) {
        if ($numero % $divisor == 0) {
            return false; 
        }
        $divisor++;
    }
    
    return true; 
}


$primos_encontrados = [];
foreach ($vetor as $num) {
    if (eh_primo($num)) {
        $primos_encontrados[] = $num;
    }
}


echo "Vetor original: " . implode(", ", $vetor) . "\n";
echo "Apenas os números primos: " . implode(", ", $primos_encontrados) . "\n";
?>