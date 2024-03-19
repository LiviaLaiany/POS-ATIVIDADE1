<?php

$letra = readline('Digite uma letra');

if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
    print_r("É uma vogal");
}else {
    print_r("É uma consoante");
}