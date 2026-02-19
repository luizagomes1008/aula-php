<?php
    #verificar  conteudo e tipos de uma variavel
    $x = 10.5;
    echo "o valor de x é de: $x <br>"; #o valor da variavel consegue aparecer sem aspas nenhuma, ou com aspas duplas, mas se usar aspas simples, aparece escrito em si:
    // '$x' -> printado -> $x
    echo"<hr>";
    #<hr> serve para adicionar linha como divisória
    #<br> serve para quebrar a linha, sempre adicionar entre as aspas, pois é html
    echo "o valor de x é:".$x;
    echo"<hr>";

    //COMANDOS DE DEPURAÇÃO DE CÓDIGO
    var_dump($x); #mostra tipo e valor da varivel
    print_r($x)#mostra apenas o valor da variavel;

   

?>