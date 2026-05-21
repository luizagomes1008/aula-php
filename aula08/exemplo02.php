<?php
    $animais = ['porquinho da india', "tartaruga"];
    $animais[] = "passarinhu azulao"; //adiciona essa string na array animais 

    foreach ($animais as $valor) {
        echo"$valor <br>";
        }

    echo"<hr>";
    
    $animais[1] = "gato"; //substitui a string na indice 1 (tartaruga) por essa nova string (gato)
    foreach ($animais as $valor) {
        echo"$valor <br>";
        }
    
    echo"<hr>";

    array_push($animais, "peixin douradu");//adiciona string ao array
    foreach ($animais as $chave => $valor) {
        echo"$chave ==> $valor  <br>";
    
    }

    echo"<hr>";   

    array_unshift($animais, "morcego"); //adiociona string morcego como a primeira indice, nao ser mais "porquinho da inidia" o primeiro indice, se tronará indice 1, poris morcego que se tornou 0
    foreach ($animais as $chave => $valor) {
        echo"$chave ==> $valor  <br>";
    
    }



?>