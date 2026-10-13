<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h1>Primitiva</h1>
    <p>
        2. Diseñar una web para jugar a la lotería primitiva.
        Introduce una combinación de 6 números entre 1 y 49
        y un número de serie entre 1 y 999.
    </p>
    <form action="" method="post">

        <label for="num1">Primer número:</label>
        <input type="number" id="num1" name="num1" min="1" max="49" required>

        <label for="num2">Segundo número:</label>
        <input type="number" id="num2" name="num2" min="1" max="49" required>

        <label for="num3">Tercer número:</label>
        <input type="number" id="num3" name="num3" min="1" max="49" required>

        <label for="num4">Cuarto número:</label>
        <input type="number" id="num4" name="num4" min="1" max="49" required>

        <label for="num5">Quinto número:</label>
        <input type="number" id="num5" name="num5" min="1" max="49" required>

        <label for="num6">Sexto número:</label>
        <input type="number" id="num6" name="num6" min="1" max="49" required>

        <label for="serie">Número de la serie:</label>
        <input type="number" id="serie" name="serie" min="1" max="999" required>
    
        <input type="submit" value="Jugar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Combinación introducida por el usuario
        $numeroUsuario = [
            $_POST['num1'],
            $_POST['num2'],
            $_POST['num3'],
            $_POST['num4'],
            $_POST['num5'],
            $_POST['num6'],
            $_POST['serie']
        ];
        // Generamos 6 números distintos
        $numeroGanador = [];
        while (count($numeroGanador) < 6) {
            $numero = random_int(1, 49);
            if (!in_array($numero, $numeroGanador)) {
                $numeroGanador[] = $numero;
            }
        }
        // Generamos la serie
        $serieGanadora = random_int(1, 999);
    ?>
        <h1>Cálculo</h1>
        <table border="1">
            <tr>
                <th></th>
                <th>Número 1</th>
                <th>Número 2</th>
                <th>Número 3</th>
                <th>Número 4</th>
                <th>Número 5</th>
                <th>Número 6</th>
                <th>Serie</th>
            </tr>
            <tr>
                <th>Número premiado</th>
                <?php
                foreach ($numeroGanador as $numero) {
                    echo "<td>$numero</td>";
                }
                echo "<td>$serieGanadora</td>";
                ?>
            </tr>
            <tr>
                <th>Número usuario</th>
                <?php
                foreach ($numeroUsuario as $numero) {
                    echo "<td>$numero</td>";
                }
                ?>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>