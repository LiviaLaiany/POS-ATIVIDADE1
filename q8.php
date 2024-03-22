<?php

$frase = readline("Digite uma frase");
$busca = readline("Palavra que vai ser substituida");
$troca = readline("Palavra que vai substituir");

$palavras = explode(' ', $frase);

for($i = 0; $i<=count($palavras);$i++){
    if ($palavras[$i] == $busca){
        $palavras[$i] = $troca;
        
    }
}
print_r(array_sum($palavras));