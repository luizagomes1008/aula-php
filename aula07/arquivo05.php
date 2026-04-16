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
                for ($j=1; $j <=3 ; $j++) { 
                    echo "<td>linha $i coluna $j</td>";
                }

                echo"</tr>";

            }
        ?>

    </table>
</body>
</html>