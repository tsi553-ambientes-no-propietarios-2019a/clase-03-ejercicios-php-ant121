<?php

/*
Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. 
Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
*/
function repetir($word,$vocales2){
    $comp = 0;
    $mayus = strtoupper ($word);
    $minus = strtolower ($word);
    for($i=0;$i<strlen($vocales2);$i++){

        if($mayus==$vocales2[$i] || $minus==$vocales2[$i]){
            $comp++;
        } 
        if($comp==2){
            echo"Se repite la vocal <b>$word</b> " . "por favor ingrese otra palabra.";
            return $comp;
            break;
        }
    }
    return $comp;
}
function vocales($word){
    $vocales2 ='';   
    $vocales = 0;
    for($c=0 ; $c<strlen($word); $c++){
        if(strstr('aeiouAEIOU',$word[$c])){
            $vocales2 .=$word[$c];
            $vocales = repetir($word[$c],$vocales2);
            if($vocales==2){
                break;
            }
        }
    }
    if($vocales<2){
        print_r("Tiene las vocales: ");
        imprimir_vocales($word);
        echo "<br>";
        print_r("La palabra tiene " . strlen($word) . " letras.");
    }
}

function imprimir_vocales($vocales){
    for($c=0; $c<strlen($vocales);$c++){
        if($vocales[$c]=="a" || $vocales[$c]=="A"){
            echo "A,";
        }
        if($vocales[$c]=="e" || $vocales[$c]=="E"){
            echo "E,";
        }
        if($vocales[$c]=="i" || $vocales[$c]=="I"){
            echo "I,";
        }
        if($vocales[$c]=="o" || $vocales[$c]=="O"){
            echo "O,";
        }
        if($vocales[$c]=="u" || $vocales[$c]=="U"){
            echo "U,";
        }
    }
    
}

$word = "eUforiA";
echo "La palabra ingresada es : $word <br>";
vocales($word);
?>