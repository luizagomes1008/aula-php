<?php
    //criando um array
    $fit = ["sneakers,", "baggy denim, ", "summer tank top,", " essential accessorioes"];

    //printar um único valor
    //echo $fit[0];

    //printar todo o array de forma prática usando foreach
    foreach ($fit as $indice => $valor) { //mostra a chave do fit e seu respectivo valor
        echo "$indice item do fit: ==> $valor <br>";
    }


    $qntd = count($fit); //antes de iniciar o laço voce precisa criar um count para usar de variavel no for
    //o count conta numeros (começa por 1), ja o array coemça pelo indice (0), entao no laço vcoe adicoina o "-1" p contar certo

    for ($i=0; $i <= $qntd-1; $i++) { 
        //echo $i . "<br>";
        echo"$fit[$i]";
    }

?>