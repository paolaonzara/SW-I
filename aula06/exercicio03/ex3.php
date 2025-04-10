<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabela de Produtos (foreach)</title>
    <style>

        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #555;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        .Aparelhos{
            background-color: #ffcfd2 ;
        }
        
        .Roupas{
            background-color: #fde4cf;
        }

        .Alimentos{
            background-color: #fbf8cc;
        }

        .Móveis{
            background-color: #b9fbc0;
        }

        .Calçados{
            background-color: #8eecf5;
        }

        .Jardinagem{
            background-color: #a3c4f3;
        }

        .Livros{
            background-color: #cfbaf0;
        }

    </style>
</head>
<body>

<h2>Tabela de Produtos</h2>

<?php

$produtos = [
    ["nome" => "Celular", "preco" => 2500, "categoria" => "Aparelhos"],
    ["nome" => "Roupa", "preco" => 40, "categoria" => "Roupas"],
    ["nome" => "Chocolate", "preco" => 10, "categoria" => "Alimentos"],
    ["nome" => "Cadeira", "preco" => 150, "categoria" => "Móveis"],
    ["nome" => "Sapato", "preco" => 120, "categoria" => "Calçados"],
    ["nome" => "Cacto", "preco" => 5, "categoria" => "Jardinagem"],
    ["nome" => "Lua de Larvas", "preco" => 60, "categoria" => "Livros"]
];

echo "<table>";
echo "<tr><th>Nome</th><th>Preço (R$)</th><th>Categoria</th></tr>";

foreach ($produtos as $produto) {
    $categoria = $produto["categoria"];
    echo "<tr class='$categoria'>";
    echo "<td>" . $produto["nome"] . "</td>";
    echo "<td>R$ " . number_format($produto["preco"], 2, ',', '.') . "</td>";
    echo "<td>" . $categoria . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>