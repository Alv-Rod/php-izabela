<?php
function calcular($operacao, $num1, $num2) {
    switch ($operacao) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erro: divisão por zero";
            }
        default:
            return "Operação inválida";
    }
}

$num1 = 10;
$num2 = 5;
//Digite aqui a operação:
$operacao = '*';
$resultado = calcular($operacao, $num1, $num2);
echo "Resultado da operação $num1 $operacao $num2 é: $resultado";
?>