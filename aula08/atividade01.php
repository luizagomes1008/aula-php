<?php
//EX 1
    $nomes = ["luiza ", "gomes ", "dos ", "santos "];
    foreach ($nomes as $valor) {
        echo"$valor";
        }

echo"<hr>";


//EX 2
    $nomes[] = " candido";
    foreach ($nomes as $valor) {
        echo"$valor";
        }

echo"<hr>";


//EX 3
     $nomes[2] = "silva ";
     foreach ($nomes as $valor) {
        echo"$valor";
        }

echo"<hr>";

//EX 4
$qntd = count($fit);

for ($i=0; $i <= $qntd-1; $i++) { 
    //echo $i . "<br>";
    echo"$fit[$i]";
}
    
    $notas = [5 , 4 , 9, 10, 10, 3, 7, 8, 10, 9];
    foreach ($notas as $valor) {
        echo "$valor";
        # code...
    }
?>