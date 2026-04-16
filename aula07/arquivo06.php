<?php
    $nomes = ['vitoria brega', 'bella chucra', 'luiza swag', 'luiza incrivel e modelo dnv'];
    
    foreach ($nomes as $valor) {
        echo "$valor, <br>";
    }
    
    foreach ($nomes as $chave => $valor) {
        echo"chave$chave ==>$valor <br>";
    }
  
    // $qtde= count($nomes); //conta quantos elementos tem o vetor
    // echo "a quantidade de nomes é: $qtde";
    // echo"<br>";



    // for ($i=0; $i <$qtde ; $i++) { 
    //     echo $nomes[$i];
    //     echo"<br>";

    //}


?>