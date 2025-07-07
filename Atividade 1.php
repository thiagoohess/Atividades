<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa par impar</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_par">Verifica se é um número par ou impar:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_imparPar">Verificar</button>
    </form> 

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_imparPar'])) {
            $numero = $_POST['numero_par'];
            if ($numero % 2 == 0) {
                echo "O numero $numero é par.";
            } else {
                echo "O numero $numero é impar.";
            };
        };
    };


    ?>

</body>

</html>