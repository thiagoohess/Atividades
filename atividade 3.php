<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo, Negativo e Zero</title>
</head>
<body>

<form method="POST" action="">
    <label for="numero_tabuada">Insira o número:</label>
    <input type="number" id="numero_tabuada" name="numero_tabuada" required>
    <button type="submit" name="verificar_tabu">Verificar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_tabu'])) {
        $numero = $_POST['numero_tabuada'];

        if ($numero > 0) {
            echo 'O número é positivo.';
        } elseif ($numero < 0) {
            echo 'Número negativo.';
        } else {
            echo 'Número igual a zero.';
        }
    }
}
?>

</body>
</html>