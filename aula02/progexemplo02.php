<?php
    //EXEMPLO DE CONTAS BASICAS
    $x = 10;
    $y = 5;
    $total = $x % $y;
    echo "total: " .$total , "<br>";
    echo "soma: " .($x + $y);

    //  IF E ELSE EXEMPLO
    echo"<hr>";
    $idade = 18;
    if($idade >= 18){
        echo"maior d idade";
    }else{
        echo"menor d idade";
    }
    //booleano (f e v)
    echo"<br>";
    $idade = false;
    if($idade){
        echo"maior d idade";
    }else{
        echo"menor d idade";
    }

    echo"<br>";
    echo"<hr>";
    //OUTRO EXEMPLO
    $dia="luiza";
    switch ($dia){
        case"segunda":
            echo "inicio da semana";
            break;
        case"luiza":
            echo "linda perfeita amo";
            break;
        case "sexta":
            echo "fim da semana chegando";
            break;
        default: 
            echo"dia normal";
       
    }

?>