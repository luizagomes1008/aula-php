<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processa dados</title>
</head>
<body>
     <?php
     $nome = $_GET['nome'];
     $email = $_GET['email'];
     $idade = $_GET['idade'];
     $anoagora = date('Y'); //Y significa Year, D é o dia da semana, M é o mês e d é o dia de numero
     $ano = $anoagora -  $idade;

     //echo"o nome é: $nome";

     ?>
     <p>o nome digitado é: <?php echo"$nome";    ?> </p>
     <p>o email digitado é: <?php echo"$email";    ?> </p>
     <p>a idade digitada é: <?php echo"$idade";    ?> </p>
     <p>o ano que você nasceu é: <?php echo"$ano";    ?> </p>



   

    
</body>
</html>