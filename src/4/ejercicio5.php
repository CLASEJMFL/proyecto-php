<?php
$fila = isset($_GET["f"]) ? $_GET["f"] : 0;
$col = isset($_GET["c"]) ? $_GET["c"] : 0;
?>

<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td><a href='ejercicio5.php?f=$i&c=$j'>";
            if ($fila == $i && $col == $j) {
                echo "<img src='abierto.png' width='40'>";
            } else {
                echo "<img src='cerrado.jpg' width='40'>";
            }
            echo "</a></td>";
        }
        echo "</tr>";
    }
    ?>
</table>