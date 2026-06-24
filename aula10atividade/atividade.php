<?php //adicionei a logica "nota invalida" pra ficar mais completinho prof
    function classificarAluno($nota){ 
        $qntdea = 0;
        $qntdeb = 0;
        $qntdec = 0;
        $qntded = 0;
        $qntde = count($nota);
        foreach ($nota as $chave => $value) {
            $situacao = "aprovado";
             if ($value >= 7 && $value <11) {
                echo "aluno " . ($chave+1) . ": aprovado <br> nota ==> $value <br> <hr> ";
                $qntdea++;
                
             }
             elseif ($value >= 5 && $value <7) {
                $situacao = "recuperação";
                echo "aluno " . ($chave+1) . ": recuperação <br> nota ==> $value <br> <hr>";
                $qntdeb++;
             }
             elseif ($value < 5 && $value >0 ) {
                $situacao = "reprovado";
                echo "aluno " . ($chave+1) . ": reprovado <br> nota ==> $value <br> <hr>";
                $qntdec++;
             }
              else {
                $situacao = "nota invalida";
                 echo "aluno " . ($chave+1) . ": nota invalida <br> nota ==> $value <br> <hr>";
                 $qntded++;
             }

             
        }  
        echo "Resumo da turma <br>";
        $media = 0;
        if ($qntded > 0) {
            echo 'por favor, verificar se digitou as notas corretamente! <br>';
        } else {
            $media = array_sum($nota)/$qntde;
            echo "média da turma: ". $media ."<br>";
             }

        if ($media >= 7) {
            echo "desempenho da turma: bom! <br>";
        }
        else {
            echo "desempenho da turma: precisa melhorar...<br>";
        }
        echo "aprovados ==> $qntdea <br>";
        echo "recuperação ==> $qntdeb <br>";
        echo "reprovados ==> $qntdec <br>";
        echo "nota invalida ==> $qntded <br>";

    }
    classificarAluno([ 10, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 9]);
   

?>