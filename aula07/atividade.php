<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade luiza gomes</title>
    <!-- prof, usei IA para me ajudar na lista, acabei me enrolando na sintaxe de alguns ex... -->


     <style>
        .par {
            background-color: lightblue;

        
        }
        .impar{
            background-color: blue;
        }

       .livro { 
        background-color: yellow; 
        }

        .mensalidade {
             background-color: lightblue;
         }

        .roupa { 
            background-color: pink;
         }
        
        h1{
            background-color:  pink;
        }
        body{
            background-color: #DADBF5 ;
        }
        
        

    </style>
</head>
<body>
    <!-- EX 1 -- TABELA -->
    <h1>tabela par e impar</h1>
    <table>
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


<!-- EX 3  TABELA USER -->
<h1>Tabela Usuario</h1>

<?php
echo '<form method="POST">
    <input type="number" name="linhas" placeholder="Digite as linhas">
    <input type="number" name="colunas" placeholder="Digite as colunas">
    <button type="submit">Gerar</button>
</form>';
    $linhas = $_POST["linhas"];
    $colunas = $_POST["colunas"];

    echo "<table>";

    for ($i = 0; $i < $linhas; $i++) {
        echo "<tr>";

        for ($j = 0; $j < $colunas; $j++) {
            echo "<td>linha $i Coluna $j</td>";
        }

        echo "</tr>";
    }

    echo "</table>";


?>

<!-- EX 3 -- TABELA array-->
 <h1>tabela array</h1>
<?php
$produtos = [
    ["nome" => "livro", "preco" => 80, "categoria" => "livro"],
    ["nome" => "mensalidade facul", "preco" => 7000, "categoria" => "mensalidade"],
    ["nome" => "roupinhas da shein", "preco" => 560, "categoria" => "Roupa"]
];

echo "<table>";
echo "<tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Categoria</th>
      </tr>";

foreach ($produtos as $p) {

    if ($p["categoria"] == "livro") {
        $classe = "livro";
    } elseif ($p["categoria"] == "mensalidade") {
        $classe = "mensalidade";
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