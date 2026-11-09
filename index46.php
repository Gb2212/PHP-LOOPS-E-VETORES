<?php

$numeros = [3, 5, 3, 8, 5, 3, 9, 8, 5, 2];

$processados = [];


foreach ($numeros as $atual) {
    
    $ja_processado = false;
    foreach ($processados as $proc) {
        if ($proc === $atual) {
            $ja_processado = true;
            break;
        }
    }
    
  
    if (!$ja_processado) {
        $frequencia = 0;
        
       
        foreach ($numeros as $item) {
            if ($item === $atual) {
                $frequencia++;
            }
        }
        
    
        $processados[] = $atual;
        
        
        echo "O número $atual aparece $frequencia vez(es).\n";
    }
}
?>