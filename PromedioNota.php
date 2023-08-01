<?php
$notas=array();
$suma=0;
$tamaño=intval(readline("Cuantas notas vas a ingresasr:"));

$i=0;

while($i<$tamaño){
$n=intval(readline("Ingresa la nota:"));
$notas[]=$n;
$i++;
}

$k=0;

while($k<count($notas)){
$suma=$suma+$notas[$k]."\n";
$k++;
}

echo "\n";
echo "el promedio de las notas es de:".$suma/count($notas);
?>