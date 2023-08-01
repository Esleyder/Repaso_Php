<?php
 
 $lista=array();
 $tamaño=intval(readline("Cuntas personas vas a ingresar:\n"));

 $i=0;
 while($i<$tamaño){
 $c=intval(readline("Ingresa la cedula:\n"));
 $n=readline("Ingresa el nombre:\n");
 $n_persona=array("Cedula"=>$c,"Nombre"=>$n);
 $persona=(object)$n_persona;
 $lista[]=$persona;
 $i++;
 }
 
 foreach($lista as $listas){
 echo $listas->Cedula."=".$listas->Nombre."\n";
 }

?>