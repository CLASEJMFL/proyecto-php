<?php
$mensaje = "";
$casilla = "";

if (isset($_POST["comprobar"])) {
    if (strtolower(trim($_POST["respuesta"])) == "gato") {
        $mensaje = "¡Felicidades! Has acertado.";
    } else {
        $mensaje = "Has fallado.";
    }
}

if (isset($_POST["casilla"])) {
    $casilla = $_POST["casilla"];
}
?>
<form method="post">
    <table border="1">
        <tr>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<td>";
                if ($casilla == $i) {
                    echo "<img src='trozo$i.png' width='100'>";
                } else {
                    echo "<button name='casilla' value='$i'>?</button>";
                }
                echo "</td>";
                if ($i % 3 == 0) echo "</tr><tr>";
            }
            ?>
        </tr>
    </table>
    <input type="text" name="respuesta" placeholder="¿Qué imagen es?">
    <button name="comprobar">Comprobar</button>
    <p><?php echo $mensaje; ?></p>
    <?php if ($mensaje == "¡Felicidades! Has acertado.") { ?>
        <img src="imagen.png" width="300">
    <?php } ?>
    <button name="volver">Volver</button>
</form>