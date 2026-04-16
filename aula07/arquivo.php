<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo01- lista de itens</title>

</head>
<body>
    <h1>LISTA DE ITENS</h1>
    <ul>
        <!-- COMEÇO DO LAÇO DE REPETIÇÃO -->
        <?php
            for ($i=1; $i <= 5 ; $i++) { 
                echo "<li> Item $i </li>";
            }
        ?>
        <!-- TÉRMINO DO LAÇO DE REPETIÇÃO -->

    </ul>
    
</body>
</html>