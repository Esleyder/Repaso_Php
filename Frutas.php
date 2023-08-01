<?php

$frutas=array("Mango","Fresa","Manzana");

echo "Primer Valor".$frutas[0];
echo "<br>";
echo "Ultimo Valor".$frutas[count($frutas)-1];
echo  "<br>";
$i=0;


while($i<count($frutas)){
    echo $frutas[$i]."<br>";
    $i++;
}
echo "<br>";

echo $k=count($frutas);
echo "<br>";

while($k>0){
echo $frutas[$k-1]."<br>";
$k--;
}
?>