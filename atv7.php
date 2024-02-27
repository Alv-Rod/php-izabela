<?php
function calcularTransposta($matriz)
{
    $linhas = count($matriz);
    $colunas = count($matriz[0]);
    $transposta = array();

    for ($i = 0; $i < $colunas; $i++) {
        for ($j = 0; $j < $linhas; $j++) {
            $transposta[$i][$j] = $matriz[$j][$i];
        }
    }
    return $transposta;
}
$original = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$transposta = calcularTransposta($original);
echo "Matriz Original:<br>";
foreach ($original as $linha) {
    echo implode(" ", $linha) . "<br>";
}
echo "<br>Matriz Transposta:<br>";
foreach ($transposta as $linha) {
    echo implode(" ", $linha) . "<br>";
}
