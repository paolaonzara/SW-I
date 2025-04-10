<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabela Gerada com WHILE</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Exercício</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $linhas = intval($_POST['linhas']);
        $colunas = intval($_POST['colunas']);

        if ($linhas > 0 && $colunas > 0) {
            echo "<table>";

            $i = 1;
            while ($i <= $linhas) {
                echo "<tr>";
                $j = 1;
                while ($j <= $colunas) {
                    echo "<td>L$i-C$j</td>"; 
                    $j++;
                }
                echo "</tr>";
                $i++;
            }

            echo "</table>";
        } else {
            echo "<p>Insira valores válidos!</p>";
        }
    }
    ?>
</body>
</html>
