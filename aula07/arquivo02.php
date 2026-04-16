<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            background-color: pink;
            border: solid black;
        
        }

    </style>
</head>
<body>
    <h1>tabela</h1>
    <table>
        <!-- cabeçario -->
        <tr>
            <td>RM</td>
            <td>NOME</td>
            <td>EMAIL</td>
        </tr>
        <?php
            for ($i=1; $i <=2 ; $i++) { 
                echo "<tr>";
                echo "<td>linha $i coluna1</td>";
                echo "<td>linha $i coluna2</td>";
                echo "<td>linha $i coluna3</td>";
                echo"</tr>";

            }

        ?>
        <!-- <tr>
            <td>25701</td>
            <td>luiza</td>
            <td>luizagsc10@gmail.com</td>
        </tr> -->
        <!-- <tr>
            <td>1234</td>
            <td>maria</td>
            <td>margia@gmail.com</td>
        </tr> -->
    </table>
</body>
</html>