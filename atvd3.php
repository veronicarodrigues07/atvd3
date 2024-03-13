<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação - Positivo, Negativo ou Neutro</title>
</head>
<body>
    <h1>Verificação - Positivo, Negativo ou Neutro</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="text" id="numero" name="numero">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if (!is_numeric($numero)) {
            echo "Por favor, insira um número válido.";
        } else {
            if ($numero > 0) {
                echo "O número $numero é positivo.";
            } elseif ($numero < 0) {
                echo "O número $numero é negativo.";
            } else {
                echo "O número $numero é neutro (zero).";
            }
        }
    }
    ?>
</body>
</html>