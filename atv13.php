<?php
function simetria($matriz) {
    $linhas = count($matriz);
    $colunas = count($matriz[0]);
    
    if ($linhas != $colunas) {
        return false;
    }
    
    $transposta = array();
    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            $transposta[$j][$i] = $matriz[$i][$j];
        }
    }
    
    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            if ($matriz[$i][$j] != $transposta[$i][$j]) {
                return false;
            }
        }
    }
    
    return true;
}

$matriz = array(
    array(1, 2, 3),
    array(2, 4, 5),
    array(3, 5, 6)
);

if (simetria($matriz)) {
    echo "A matriz é simétrica.";
} else {
    echo "A matriz não é simétrica.";
}
?>