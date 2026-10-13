<?php
if (isset($_POST["calcular"])) {
    $precio1 = $_POST["precio1"];
    $precio2 = $_POST["precio2"];
    $precio3 = $_POST["precio3"];

    $media = ($precio1 + $precio2 + $precio3) / 3;

    $diferencia1 = $precio1 - $media;
    $diferencia2 = $precio2 - $media;
    $diferencia3 = $precio3 - $media;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Precio medio</title>
</head>
<body>

<h1>Precio medio de tres tiendas</h1>
    <p>
        4. Diseñar un desarrollo web simple con php que pida al usuario el precio de un producto en tres establecimientos
        distintos denominados “Tienda 1”, “Tienda 2” y “Tienda 3”. Una vez se introduzca esta información se debe
        calcular y mostrar el precio medio del producto en las tres tiendas. Mostrar en la página resultado, una tabla
        con un título, el precio en cada una de las tiendas, la media de los tres precios y la diferencia del precio de cada
        tienda con la media. Combina celdas para que quede visualmente agradable.
    </p>

<form method="post">
    Tienda 1:
    <input type="number" name="precio1" step="0.01" required>
    <br><br>

    Tienda 2:
    <input type="number" name="precio2" step="0.01" required>
    <br><br>

    Tienda 3:
    <input type="number" name="precio3" step="0.01" required>
    <br><br>

    <input type="submit" name="calcular" value="Calcular">
</form>

<?php if (isset($_POST["calcular"])) { ?>

    <table border="1">
        <tr>
            <th colspan="3">Comparación de precios</th>
        </tr>

        <tr>
            <th>Tienda</th>
            <th>Precio</th>
            <th>Diferencia con la media</th>
        </tr>

        <tr>
            <td>Tienda 1</td>
            <td><?php echo number_format($precio1, 2); ?> €</td>
            <td><?php echo number_format($diferencia1, 2); ?> €</td>
        </tr>

        <tr>
            <td>Tienda 2</td>
            <td><?php echo number_format($precio2, 2); ?> €</td>
            <td><?php echo number_format($diferencia2, 2); ?> €</td>
        </tr>

        <tr>
            <td>Tienda 3</td>
            <td><?php echo number_format($precio3, 2); ?> €</td>
            <td><?php echo number_format($diferencia3, 2); ?> €</td>
        </tr>

        <tr>
            <th colspan="2">Precio medio</th>
            <th><?php echo number_format($media, 2); ?> €</th>
        </tr>
    </table>

<?php } ?>

</body>
</html>