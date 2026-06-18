
<?php
    //ex 1
    function acionarCenaNoturna(){
        echo"Luzes Zigbee apagadas, persianas fechadas e alarme ativado";
    }
    acionarCenaNoturna();


    echo "<br> <hr>";
    //ex2
    function movimentarMotor($graus){
        echo"Movendo o servo motor para $graus graus.";
    }
    movimentarMotor(90);
    echo "<br> <hr>";
    
    //ex3  
    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto){
       return $tempo = $capacidadeBateria/$consumoPorMinuto;
        return $tempo;
    }
    $retorno = calcularAutonomia(100, 5);
    echo "tempo estimado de voo: $retorno minutos";

    //ex4 
     echo "<br> <hr>";
    function verificarAcesso($senhaDigitada){
        if ($senhaDigitada == 123456){
            echo"senha certa";
        }
        else {
            echo"senha incorreta";
        }
    }
    verificarAcesso(12345);

    //ex5
    echo "<br> <hr>";
    function calcularMediaTemperatura($listaDeTemperaturas){   
    $soma=0;
    foreach ($listaDeTemperaturas as $temperatura ) {
        $soma += $temperatura;
    }
    $qntde = count($listaDeTemperaturas);
    $media = $soma/$qntde;
    return $media;
    
    }
    echo calcularMediaTemperatura([10, 20, 13]);
     



?>