<?php

$arreglo1=array();
$arreglo2=array();

for($i=0;$i<3;$i++){
$valor1=readline("ingresa el valor arreglo 1: \n");
$arreglo1[]=$valor1;
}

for($k=0;$k<3;$k++){
$valor2=readline("ingresa el valor arreglo2: \n");
$arreglo2[]=$valor2;
}

$prom1=Promedio($arreglo1);
$prom2=Promedio($arreglo2);

echo "El promedio del Arreglo1.".$prom1."es \n";
echo "El Promedio del Arreglo 2.".$prom2." es \n";
echo "La suma de los arreglos es:".$prom1+$prom2;


function Promedio($array){
    $suma=0;
    foreach($array as $a){
    $suma=$suma+$a;
    }
    $cant=count($array);
    return $suma/$cant;
    }
?>
