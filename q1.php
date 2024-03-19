<?php

$nota = readline('Nota: ');

if ($nota >= 60) {
    print('Aprovado');
} elseif ($nota >= 20) {
    print('Em recuperação');
} else {
    print('Reprovado');
}
