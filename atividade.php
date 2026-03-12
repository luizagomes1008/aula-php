<?php
    $a = 10;
    $b = "10";


    echo "<p style='color: red'> É IDENTICO?</p>"; 
    $resultado = ($a===$b);
       if ($resultado==1){
        echo"verdadeiro";
       }else{
        echo"false";

       }

       echo "<p style='color: red'> É IGUAL?</p>"; 
       $resultado = ($a==$b);
          if ($resultado==1){
           echo"verdadeiro";
          }else{
           echo"false";
   
          }
    //echo "Resultado = $resultado";

?>