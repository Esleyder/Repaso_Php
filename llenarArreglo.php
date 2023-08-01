<?php

$frutas=array();

$tamaño=intval(readline("Cunastras frutas vas a ingresar :"));

$i=0;

while($i<$tamaño){
$f=readline("Ingresa La fruta : ");
$frutas[]=$f;
$i++;
}



$k=0;

while($k<count($frutas)){
echo $frutas[$k]."\n";
$k++;
}
echo "\n";

$l=count($frutas);

while($l>0){
echo $frutas[$l-1]."\n";
$l--;
}
?>