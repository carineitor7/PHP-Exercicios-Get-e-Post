<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST["enviar1"])){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $soma = $numero1 + $numero2;
        
        echo "<p>Resultado: $soma</p>"; 
    }

    ?>
    
    <form method="post" action="">    
        <label for="numero1">Numero1:></label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Numero2:></label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <input type="submit" name="enviar1" required>
</body>
</html>
