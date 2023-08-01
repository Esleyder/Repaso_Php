<?php
/*
llenar un arreglo con 10 numeros enteros,
posteriormente hacer las siguientes acciones:
sumarte 2 a los 5 primeros numeros.
sumarle 5 a los ultimos numeros
sumar todos los numeros obtenidos
mostrar el resultado de todas las operacions
*/
$arreglo=array();

for($i=1;$i<=10;$i++){
$num=readline($i."Ingresa los valores \n");
$arreglo[]=$num;
}
$suma_total=0;

for($j=0;$j<10;$j++){
$suma=0;
if($j<5){
   $suma=$arreglo[$j]+2;
   echo "Posicion $j mas 2:".$suma."\n";
}else{
$suma=$arreglo[$j]+5;
  echo "Posicion $j mas 5:".$suma."\n";
}
$suma_total=$suma_total+$suma;
}
echo "la suma total es:".$suma_total;
?>