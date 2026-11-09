<?php

$numeros = [10, 25, 42, 7, 89, 33];

echo "Vetor original: " . implode(", ", $numeros) . "\n\n";
echo "Elementos na ordem inversa:\n";

$tamanho = count($numeros);

for ($i = $tamanho - 1; $i >= 0; $i--) {
    echo $numeros[$i] . "\n";
}
?>