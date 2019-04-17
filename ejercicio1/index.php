<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

/* ---------------for---------------*/
echo "Bucle for <br>";
for($i=1;$i<=12;$i++){
    $valor=2 * $i;
    echo "2 x $i = $valor";
    echo "<br>";
}
echo "<br>";
/* ---------------while---------------*/
echo "Bucle while <br>";
$i=1;
while($i<=12){
    $valor=2*$i;
    echo "2 x $i = $valor";
    echo "<br>";
    $i++;
}
echo "<br>";
/* ---------------do-while---------------*/
echo "Bucle do-while <br>";
$i=1;
do{
    $valor=2*$i;
    echo "2 x $i = $valor";
    echo "<br>";
    $i++;
}while($i<=12);
?>