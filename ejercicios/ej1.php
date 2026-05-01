<?php

$array=array(1,2,3,4,5,6,7,8,9);

function promedio($arreglo){
    $cantidad = count($arreglo);
    $subtotal = 0;

    for ($i=0; $i < count($arreglo); $i++){
        $subtotal += $arreglo[$i];
    }

    $promedio = $subtotal / $cantidad;
    return $promedio;
}

$promedio_calculo = promedio($array);

echo "el promedio es: " . $promedio_calculo;