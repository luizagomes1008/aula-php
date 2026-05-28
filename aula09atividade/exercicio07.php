<?php
    $numeros = [14, 23, 2, 1, 80, 4 ];
    sort($numeros);
    foreach ($numeros as $indice) { 
        echo "$indice";
    }
    echo"<hr>";

    rsort($numeros);
    foreach ($numeros as $indice) { 
        echo "$indice";
    }



?>