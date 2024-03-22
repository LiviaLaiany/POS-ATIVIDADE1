<?php
$t1 = readline();
$t2 = readline();

$numeros1 = str_split($t1);
$numeros2 = str_split($t2);
$junto[0] = 0;

for($i =0;$i<=count($numeros1);$i++){
    if($i % 2 != 0){
        $junto[$i]= $numeros2[$i-1];
    }else{
        $junto[$i] = $numeros1[$i];
    }
}

print_r($junto);