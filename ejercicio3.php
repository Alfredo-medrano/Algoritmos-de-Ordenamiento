<?php
function insertionSort($array) {
    $n = count($array);
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];
        $j = $i - 1;
        
        while ($j >= 0 && strcasecmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}

$nombre = array("Carlos", "Ana", "Beatriz", "david", "Élena", "fabio", "Álvaro", "lucía");

echo "Lista Original:\n";
print_r($nombre);

$nombre_ordenados = insertionSort($nombre);

echo "\nLista Ordenada Alfabéticamente:\n";
print_r($nombre_ordenados);
