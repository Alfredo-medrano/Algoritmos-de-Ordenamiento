<?php
function bubbleSortDesc(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

$numeros = array(3, -1, 4, 3, 0, -2, 5, 4);

echo "Lista Original:\n";
print_r($numeros);

bubbleSortDesc($numeros);

echo "Lista Ordenada Descendentemente:\n";
print_r($numeros);

