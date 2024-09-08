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
        $nome = $_POST["nome"];
        $anoNascimento = $_POST["ano_nascimento"];
        $anoAtual = date('Y');
        $idade = $anoAtual - $anoNascimento;

        echo "<p>Nome: $nome</p>";
        echo "<p>Idade: $idade anos</p>";
    ?>

    <form method="post" action="">
            <label for="nome">Informe seu nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="ano_nascimento">Informe seu ano de nascimento:</label>
            <input type="number" id="ano_nascimento" name="ano_nascimento" required><br><br>

            <input type="submit" name="enviar" value="Calcular Idade">

</body>
</html>
