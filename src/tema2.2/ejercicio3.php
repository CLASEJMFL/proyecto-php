// 3. Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
'table' de HTML.

<?php
    $palabras = [
    ["word" => "Bank", "palabra" => "Banco"],
    ["word" => "Computer", "palabra" => "Ordenador"],
    ["word" => "Laptop", "palabra" => "Portatil"],
    ["word" => "Mobile Phone", "palabra" => "Telefono movil"],
    ["word" => "Clock", "palabra" => "Reloj"],
    ["word" => "Table", "palabra" => "Mesa"],
    ["word" => "Whale", "palabra" => "Ballena"],
    ["word" => "Black", "palabra" => "Negro"],
    ["word" => "Steal", "palabra" => "Robar"],
    ["word" => "Watermelon", "palabra" => "Sandia"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <table border="1px" style="text-align: center;">
        <tr>
            <th>Ingles</th>
            <th>Español</th>
        </tr>
        <?php foreach ($palabras as $palabras): ?>
            <tr>
                <td><?php echo $palabras['word']; ?></td>
                <td><?php echo $palabras['palabra']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>