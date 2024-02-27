<?php
$a = "1";
$b = "1";

for ($i=0; $i < 10; $i++) { 
    echo $a . "";
    $temp = $a;
    $a = $b;
    $b = $temp + $b;
    echo " ";
}
?>