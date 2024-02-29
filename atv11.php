<?php
function ehPalindromo($palavra) {
    $palavra = strtolower(str_replace(' ', '', $palavra));
    
    if ($palavra === strrev($palavra)) {
        return true;
    } else {
        return false;
    }
}

$palavra = "arara";
if (ehPalindromo($palavra)) {
    echo "$palavra é um palíndromo.";
} else {
    echo "$palavra não é um palíndromo.";
}
?>