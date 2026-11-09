<?php

$numeros = [15, 42, 8, 23, 42, 99, 15, 67, 99, 4];


$maior = $numeros[0];
foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
}


$segundo_maior = null;
foreach ($numeros as $numero) {
    
    if ($numero < $maior) {
        if ($segundo_maior === null || $numero > $segundo_maior) {
            $segundo_maior = $numero;
        }
    }
}


echo "Vetor original: ";
print_r($numeros);

echo "\nMaior valor: " . $maior;
echo "\nSegundo maior valor distinto: " . $segundo_maior;
?>