<?php
if (isset($_POST["calcular"])) {
    $diametro = $_POST["diametro"];
    $altura = $_POST["altura"];
    $caudal = $_POST["caudal"];

    $radio = $diametro / 2;

    $volumen = pi() * $radio * $radio * $altura * 1000;

    $tiempo = $volumen / $caudal;

    $horas = floor($tiempo / 60);
    $minutos = round($tiempo % 60);

    if ($minutos == 60) {
        $horas++;
        $minutos = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Llenado del depósito</title>
</head>
<body>

<h1>Tiempo de llenado del depósito</h1>
    <p>
        5. Diseñar un desarrollo web simple con PHP que dé respuesta a la necesidad que se plantea a continuación:
        Un operario de una fábrica recibe cada cierto tiempo un depósito cilíndrico de dimensiones variables, que debe
        llenar de aceite a través de una toma con cierto caudal disponible. Se desea crear una aplicación web que le
        indique cuánto tiempo transcurrirá hasta el llenado del depósito. Para calcular dicho tiempo el usuario
        introducirá los siguientes datos: diámetro y altura del cilindro y caudal de aceite (litros por minuto). Una vez
        introducidos se mostrará el tiempo total en horas y minutos que se tardará en llenar el cilindro.
    </p>
<form method="post">
    Diámetro (metros):
    <input type="number" name="diametro" step="any" required>
    <br><br>

    Altura (metros):
    <input type="number" name="altura" step="any" required>
    <br><br>

    Caudal (litros por minuto):
    <input type="number" name="caudal" step="any" required>
    <br><br>

    <input type="submit" name="calcular" value="Calcular">
</form>

<?php if (isset($_POST["calcular"])) { ?>

    <h2>Resultado</h2>

    <p>
        Volumen del depósito:
        <?php echo round($volumen, 2); ?> litros
    </p>

    <p>
        Tiempo necesario:
        <?php echo $horas; ?> horas y
        <?php echo $minutos; ?> minutos
    </p>

<?php } ?>

</body>
</html>