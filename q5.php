<?php

$palavra = readline("Digite uma palavra");

$letras = str_split($palavra);
$vogais = 0;

for($i = 0; $i< count($letras); $i++){
    if($letras[$i] == "a" || $letras[$i] == "e" || $letras[$i] == "i" || $letras[$i] == "o" || $letras[$i] == "u"){
        $vogais += 1;
    }
}
print_r($vogais);