// 4. Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP para
familiarizarte con éste último.

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Horario de clase</title>
</head>
<body>

<h1>Mi horario de clase</h1>

<table border="1">
    <tr>
        <th>Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
    </tr>

    <?php
        echo "<tr>";
        echo "<td>8:15 - 9:15</td>";
        echo "<td>DWEC</td>";
        echo "<td>PIM</td>";
        echo "<td>Ingles</td>";
        echo "<td>DWES</td>";
        echo "<td>DWEc</td>";
        echo "</tr>";
    ?>

    <?php
        echo "<tr>";
        echo "<td>9:15 - 10:15</td>";
        echo "<td>DWEC</td>";
        echo "<td>PIM</td>";
        echo "<td>DWES</td>";
        echo "<td>DWES</td>";
        echo "<td>DWEC</td>";
        echo "</tr>";
    ?>

    <?php
        echo "<tr>";
        echo "<td>10:15 - 11:15</td>";
        echo "<td>DWEC</td>";
        echo "<td>Optativa</td>";
        echo "<td>DWES</td>";
        echo "<td>DWES</td>";
        echo "<td>DWEC</td>";
        echo "</tr>";
    ?>

    <?php
        echo "<tr>";
        echo "<td>11:15 - 11:45</td>";

    ?>

    <?php
        echo "<tr>";
        echo "<td>11:45 - 12:45</td>";
        echo "<td>Ingles</td>";
        echo "<td>Optativa</td>";
        echo "<td>DIW</td>";
        echo "<td>DIW</td>";
        echo "<td>DIW</td>";
        echo "</tr>";
    ?>

    <?php
        echo "<tr>";
        echo "<td>12:45 - 13:45</td>";
        echo "<td>DWES</td>";
        echo "<td>Despliegue</td>";
        echo "<td></td>";
        echo "<td>DIW</td>";
        echo "<td>DIW</td>";
        echo "</tr>";
    ?>

    <?php
        echo "<tr>";
        echo "<td>13:45 - 14:45</td>";
        echo "<td>DWES</td>";
        echo "<td>Despliegue</td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td>Optativa</td>";
        echo "</tr>";
    ?>

</table>

</body>
</html>
```
