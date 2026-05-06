<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade luiza gomes</title>

<!-- EX 1 -- TABELA -->
     <style>
        .par {
            background-color: pink;

        
        }
        .impar{
            background-color: blue;
        }

       .alimento { 
        background-color: lightgreen; 
        }

        .eletronico {
             background-color: lightblue;
         }

        .roupa { 
            background-color: pink;
         }

    </style>
</head>
<body>
    <h1>tabela par e impar</h1>
    <table>
        <!-- cabeçario -->
        <tr>
            <td>titulo</td>
            <td>titulo</td>
            <td>titulo</td>
            <td>titulo</td>
        </tr>
      <?php
        for ($i = 1; $i <= 8; $i++) { 
            if ($i % 2 == 0) {
                $classe = "par";
            } else {
                $classe = "impar";
            }

            echo "<tr class='$classe'>";

            for ($j = 1; $j <= 4; $j++) { 
                echo "<td>linha $i coluna $j</td>";
            }

            echo "</tr>";
        }
?>
    </table>




<!-- EX 2 -- TABELA, nao consegui fazer... -->
  <h1>tabela usuario</h1>
   <form method="POST" action="">
    Linhas: <input type="number" name="linhas">
    Colunas: <input type="number" name="colunas">
    <button type="submit">Gerar tabela</button>   
    </form>



</table>

<!-- EX 3 -- TABELA-->
 <h1>tabela array</h1>
<?php
$produtos = [
    ["nome" => "Arroz", "preco" => 10, "categoria" => "Alimento"],
    ["nome" => "Mouse", "preco" => 50, "categoria" => "Eletrônico"],
    ["nome" => "Camiseta", "preco" => 30, "categoria" => "Roupa"]
];

echo "<table>";
echo "<tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Categoria</th>
      </tr>";

foreach ($produtos as $p) {

    if ($p["categoria"] == "Alimento") {
        $classe = "alimento";
    } elseif ($p["categoria"] == "Eletrônico") {
        $classe = "eletronico";
    } else {
        $classe = "roupa";
    }

    echo "<tr class='$classe'>";
    echo "<td>{$p['nome']}</td>";
    echo "<td>{$p['preco']}</td>";
    echo "<td>{$p['categoria']}</td>";
    echo "</tr>";
}

echo "</table>";
?>


</body>
</html>