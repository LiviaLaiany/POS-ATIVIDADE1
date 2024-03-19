<?php

$numero = (int)readline("Digite um numero");
$multiplicacao = 1;
for($i = 1; $i<= $numero; $i++){
    $multiplicacao = ($i * $multiplicacao);
}    
print_r($multiplicacao);