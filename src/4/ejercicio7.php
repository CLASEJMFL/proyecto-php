<?php
if (isset($_POST["jugar"])) {
    $elegidos = $_POST["numeros"] ?? [];
    $ganadores = array_slice(range(1, 49), 0);
    shuffle($ganadores);
    $ganadores = array_slice($ganadores, 0, 6);

    $serie = rand(1000, 9999);
    $aciertos = 0;
    $premio = 0;

    foreach ($ganadores as $n) {
        if (in_array($n, $elegidos)) $aciertos++;
    }

    if (count($elegidos) > 6) {
        $mensaje = "Has hecho trampas.";
    } else {
        $mensaje = "Aciertos: $aciertos";

        if ($aciertos == 4) $premio = 5;
        if ($aciertos == 5) $premio = 30;
        if ($aciertos == 6) $premio = 100;

        if (isset($_POST["serie"]) && $_POST["serie"] == $serie) {
            $premio += 500;
        }

        $mensaje .= " | Premio: $premio euros";
    }
}
?>

<form method="post">
<table border="1">
<?php
for ($i = 1; $i <= 49; $i++) {
    if ($i % 7 == 1) echo "<tr>";

    echo "<td><label>";
    echo "<input type='checkbox' name='numeros[]' value='$i'>";
    echo $i;
    echo "</label></td>";

    if ($i % 7 == 0) echo "</tr>";
}
?>
</table>

<p>Número de serie:
<input type="text" name="serie"></p>

<button name="jugar">Jugar</button>
</form>

<?php
if (isset($_POST["jugar"])) {
    echo "<p>Combinación ganadora: ";
    foreach ($ganadores as $n) echo "$n ";
    echo "</p>";

    echo "<p>Número de serie ganador: $serie</p>";
    echo "<p>$mensaje</p>";

    if (count($elegidos) <= 6) {
        echo "<table border='1'>";
        for ($i = 1; $i <= 49; $i++) {
            if ($i % 7 == 1) echo "<tr>";

            if (in_array($i, $elegidos) && in_array($i, $ganadores)) {
                $color = "green";
            } elseif (in_array($i, $elegidos)) {
                $color = "black";
            } elseif (in_array($i, $ganadores)) {
                $color = "red";
            } else {
                $color = "gray";
            }

            echo "<td style='color:$color'>$i</td>";

            if ($i % 7 == 0) echo "</tr>";
        }
        echo "</table>";
    }
}
?>