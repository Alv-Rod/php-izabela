<?php
function segundoMaiorElemento($array) {
    $array = array_values(array_unique($array));
    
    rsort($array);
    
    return $array[1];
}

$array = [6, 34, 59, 70, 9, 22, 45, 63, 8];
echo "O segundo maior elemento na matriz é: " . segundoMaiorElemento($array);
?>