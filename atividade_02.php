<?php

function inverterTexto($texto) {
    $tamanho = mb_strlen($texto);
 
    // Separa cada caractere (funciona certinho com acentos também)
    $letras = mb_str_split($texto);
    $invertido = implode('', array_reverse($letras));
 
    echo "Quantidade de caracteres: $tamanho\n";
    return $invertido;
}
 
echo "Exercício 02\n";
echo inverterTexto("Programação") . "\n\n";