<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Calculo de diametro de cilindro</h1>
    <p>
        1. Diseñar un formulario web que pida la altura y el diámetro de un cilindro. Una vez el usuario introduzca los
        datos y pulse el botón calcular, deberá calcularse el volumen del cilindro y mostrarse el resultado en el
        navegador. Mostrar la imagen de un cilindro junto al resultado y un título "Calculo del volúmen de un cilindro",
        intenta dar un aspecto agradable a la página de resultado.
    </p>
    <form action="" method="post">
        <div>
            <label for="altura">Altura (cm):</label>
            <input type="number" id="altura" name="altura" step="any" required>
        </div>
        <div>
            <label for="diametro">Diámetro (cm):</label>
            <input type="number" id="diametro" name="diametro" step="any" required>
        </div>
        <button type="submit">Calcular</button>
    </form>
    
    <?php
        if ($_POST) {
            $r = $_POST['diametro'] / 2;
            $v = pi() * $r * $r * $_POST['altura'];

            echo "<h1>Calculo del volúmen de un cilindro</h1>";
            echo "<p>El volumen es: " . round($v, 2) . " cm³</p>";
            echo "<img src='https://www.proferecursos.com/wp-content/uploads/Volumen-de-un-Cilindro.jpg' alt='Cilindro'>";
        }
    ?>
</body>
</html>