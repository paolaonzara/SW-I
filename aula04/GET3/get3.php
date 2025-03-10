<?php

$CorEscolhida = "white";
$CorTexto = "black"; 


if ($_POST["cor"] == "noturno") {
    $CorEscolhida = "black"; 
    $CorTexto = "white"; 
} elseif ($_POST["cor"] == "diurno") {
    $CorEscolhida = "white"; 
    $CorTexto = "black"; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04 - Tema</title>
    <link href="estilo1.css" rel="stylesheet">
    <style>
        body {
            background-color: <?php echo $CorEscolhida; ?>;
            color: <?php echo $CorTexto; ?>; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>USANDO POST 03</h1>
        <form action="get3.php" method="post">
            <p>Insira a cor que você deseja que o site fique:</p>
            <label class="cores" for="cor">Escolha: </label>
            <select name="cor" id="cor" required>
                <option value="noturno">Noturno</option>
                <option value="diurno">Diurno</option>
            </select>
            <button type="submit">Aplicar Tema</button>
        </form>
    </div>
</body>
</html>
