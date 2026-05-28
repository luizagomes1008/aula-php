<?php
    $numeros = [14, 23, 2, 1, 80, 4 ];
    echo"numeros na ordem crescente";
    sort($numeros);
    foreach ($numeros as $indice) { 
        echo "$indice";
    }
    echo"<hr>";

    echo"numeros na ordem decrescente";
    rsort($numeros);
    foreach ($numeros as $indice) { 
        echo "$indice";
    }



?>