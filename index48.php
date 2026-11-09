<?php

$vetor = [42, 7, 19, 3, 85, 23, 11, 50, 2, 34];

echo "Vetor original: " . implode(", ", $vetor) . "\n\n";

$tamanho = count($vetor);

for ($i = 0; $i < $tamanho - 1; $i++) {
    for ($j = 0; $j < $tamanho - 1 - $i; $j++) {
        
        if ($vetor[$j] > $vetor[$j + 1]) {
            
            $temp = $vetor[$j];
            $vetor[$j] = $vetor[$j + 1];
            $vetor[$j + 1] = $temp;
        }
    }
}


echo "Vetor ordenado em ordem crescente: " . implode(", ", $vetor) . "\n";
?>