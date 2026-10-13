<?php
$casilla = $_POST["casilla"] ?? "";
$respuesta = $_POST["respuesta"] ?? "";
$mensaje = "";

if (isset($_POST["comprobar"])) {
    if (strtolower(trim($respuesta)) == "gato") {
        $mensaje = "¡Has acertado!";
    } else {
        $mensaje = "Has fallado.";
    }
}
?>

<form method="post">
    <table border="1">
        <?php
        for ($i = 1; $i <= 9; $i++) {
            if ($i % 3 == 1) echo "<tr>";

            echo "<td>";
            if ($casilla == $i) {
                echo "<img src='trozo$i.jpg' width='100'>";
            } else {
                echo "<button name='casilla' value='$i'>?</button>";
            }
            echo "</td>";

            if ($i % 3 == 0) echo "</tr>";
        }
        ?>
    </table>

    <input type="text" name="respuesta" value="<?php echo htmlspecialchars($respuesta); ?>">
    <button name="comprobar">Comprobar</button>
    <p><?php echo $mensaje; ?></p>

    <?php if ($mensaje == "¡Has acertado!") { ?>
        <img src="imagen.jpg" width="300">
    <?php } ?>

</form>