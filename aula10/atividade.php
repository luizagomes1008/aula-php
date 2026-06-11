
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
        
        return"Tempo estimado de voo:  minutos.";
    }
    $retorno = msg("carol");
    echo $retorno;

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
    verificarAcesso(12345)




?>