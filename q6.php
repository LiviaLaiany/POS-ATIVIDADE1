<?php

$palavra = readline("Digite uma palavra");

$letras = str_split($palavra);
$quantidade = count($letras);
$resposta = " ";
for($i=0;$i<$quantidade; $i++){
    if ($letras[$i] == $letras[$quantidade - 1 -$i]){
        $resposta = "Sim";
    }else{
        $resposta = "Não";
    }
}
print_r($resposta);