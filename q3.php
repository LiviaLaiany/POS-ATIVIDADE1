<?php

    $ano = readline("Digite um ano para saber se é bissexto");

    if ($ano % 4 == 0){
        if($ano % 100 == 0 && $ano % 400 == 0){
            print_r("Sim");
        }elseif($ano % 100 == 0 && $ano % 400 != 0){
            print_r("Não");
        }else{
            print_r("Sim");
        }

    }else {
        print_r("Não");
    }