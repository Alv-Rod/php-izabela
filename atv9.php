<?php
$num = rand(-5, 5);

echo "O número é: $num, ";

if($num > 0){
    echo "ele é positivo";
}
else if($num < 0){
    echo "ele é negativo";
}
else{
echo "ele é igual a zero";
}
?>