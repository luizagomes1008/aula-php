<?php
    $cores=["rosa, ", "azul, ", "laranja"];
    foreach ($cores as $indice) { 
        echo "$indice";
    }

    echo"<hr>";

    array_push($cores, ", roxo");
    foreach ($cores as $indice) { 
        echo "$indice";
    }

    echo"<hr>";

    array_shift($cores);
    foreach ($cores as $indice) { 
        echo "$indice";
    }
  
?>