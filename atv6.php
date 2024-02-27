<?php
$num = [5, 7, 6, 2, 0];

$soma = array_sum($num);
$resultado = $soma/count($num);

echo "A média de ";
foreach ($num as $numeros) {
    echo $numeros . ", ";
}
echo " é $resultado"
?>