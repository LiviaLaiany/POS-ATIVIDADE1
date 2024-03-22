<?php
$numeros = readline();

$numero = explode(' ',$numeros);
$novo[0] = 0;

//precisa de um for pra passar pelo array e de outro pra passar pelas outras posições
for($i=0;$i<=count($numero); $i++){
    for($l=0;$l<=count($numero);$l++){
        if($numero[$i]<=$numero[$l]){
            $novo[$i] = $numero[$i];
        }else{
            $novo[$i] = $numero[$i+1];
        }
    }
}
print_r($novo);