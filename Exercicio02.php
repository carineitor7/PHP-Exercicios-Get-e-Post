<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["enviar"])) {
        $numero = $_POST["numero"];

        if ($numero >= 0) {
            $resultado = 1;

            for ($i = 2; $i <= $numero; $i++) {
                $resultado *= $i;
            }

            echo "<p>Fatorial de $numero é: $resultado</p>";
        } else {
            echo "<p>Por favor, insira um número não negativo.</p>";
        }
    }
    ?>

    <label for="numero">Informe um número:</label>
        <input type="number" id="numero" name="numero" required><br><br>

        <input type="submit" name="enviar" value="Calcular Fatorial">

</body>
</html>
