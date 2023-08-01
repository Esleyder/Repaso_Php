<?php

$lista =array();

$tamaño=2;
$i=0;
while($i<$tamaño){
$id=intval(readline("Ingresa tu cedula: \n"));
$nombre=readline("Ingresa tu nmbre \n");
$nueva_persona=array("Cedula"=>$id,"Nombre"=>$nombre);
$persona=(object)$nueva_persona;
$lista[]=$persona;
$i++;
}

foreach($lista as $listas){
    echo $listas->Cedula."\n";
    echo $listas->Nombre;
}
?>