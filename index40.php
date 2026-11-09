<?php


$nomes = ["Ana", "Bruno", "Carlos", "Daniela", "Eduardo", "Fernanda", "Gabriel", "Helena"];


$nomeBuscado = "Carlos";
$encontrado = false;


foreach ($nomes as $nome) {
    if ($nome === $nomeBuscado) {
        $encontrado = true;
        break; 
    }
}

if ($encontrado) {
    echo "O nome '$nomeBuscado' foi encontrado no vetor!\n";
} else {
    echo "O nome '$nomeBuscado' NÃO foi encontrado no vetor.\n";
}
?>






