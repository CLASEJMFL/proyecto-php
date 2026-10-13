<table border="1">
    <tr>
        <th>Bloque</th>
        <th>Piso</th>
        <th>Llamar</th>
    </tr>

    <?php
    for ($b = 1; $b <= 10; $b++) {
        for ($p = 1; $p <= 7; $p++) {
            echo "<tr>";
            echo "<td>$b</td>";
            echo "<td>$p</td>";
            echo "<td><a href='llamar.php?bloque=$b& piso=$p'>Llamar</a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>