<?php
function mergeSort($array) {
    if(count($array) <= 1){
        return $array;
    }

    $mid = floor(count($array) / 2);
    $left = mergeSort(array_slice($array, 0, $mid));
    $right = mergeSort(array_slice($array, $mid));

    return merge($left, $right);
}

function merge($left, $right) {
    $result = array();
    while(count($left) > 0 && count($right) > 0){
        if(strcasecmp($left[0], $right[0]) <= 0){
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}

$palabras = array("manzana", "banana", "naranja", "kiwi", "uva", "pera", "mango", "arándano");

echo "Lista Original:\n";
print_r($palabras);

$palabras_ordenadas = mergeSort($palabras);

echo "\nLista Ordenada Alfabéticamente:\n";
print_r($palabras_ordenadas);

