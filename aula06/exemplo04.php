<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

        $dados = [
            [
                "nome" => "ALALA",
                "idade" => 79,
                "tel" => "129283990",
                "cidade" => "Sorocaba"  
            ],
            [
                "nome" => "Maria",
                "idade" => 21,
                "tel" => "131364798",
                "cidade" => "Pindamonhangaba"  
            ]
        ];
        foreach ($dados as $chave => $valor) {
            foreach ($dados[$chave] as $key => $valor) {
                echo "$key: " . $valor . "<br>";
            }
            echo "<hr>";
        }   
        
    ?>    
</body>
</html>
