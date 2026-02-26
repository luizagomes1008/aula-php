<?php
$a =4;
$b = "101 dalmatas";
$s= $a + $b;
echo $s; //DA ERRO, MAS O RESULTADO MOSTRA DO MESMO JEITO, É APENAS UM AVISO, NAO UM ERRO FATAL
"<hb>";
$a =4;
$b = "101 dalmatas";
$s= $a . $b; //o ponto multiplica, e nao dá erro como as outras contas, pois ele contatena tudo para uma string
echo $s;
?>