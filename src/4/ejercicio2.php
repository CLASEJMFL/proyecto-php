<?php
if (isset($_POST["jugar"])) {
    $n1 = rand(1, 44);
    $n2 = $n1 + 1;
    $n3 = $n1 + 2;
    $n4 = $n1 + 3;
    $n5 = $n1 + 4;
    $n6 = $n1 + 5;

    $aciertos = 0;

    if (isset($_POST["n1"]) && $_POST["n1"] == $n1) $aciertos++;
    if (isset($_POST["n2"]) && $_POST["n2"] == $n2) $aciertos++;
    if (isset($_POST["n3"]) && $_POST["n3"] == $n3) $aciertos++;
    if (isset($_POST["n4"]) && $_POST["n4"] == $n4) $aciertos++;
    if (isset($_POST["n5"]) && $_POST["n5"] == $n5) $aciertos++;
    if (isset($_POST["n6"]) && $_POST["n6"] == $n6) $aciertos++;

    $premio = 0;
    if ($aciertos == 4) $premio = 5;
    if ($aciertos == 5) $premio = 30;
    if ($aciertos == 6) $premio = 100;

    if (isset($_POST["serie"]) && $_POST["serie"] == $n1) $premio += 500;
}
?>

<form method="post">
    <?php
    for ($i = 1; $i <= 49; $i++) {
        echo "<label><input type='checkbox' name='n$i' value='$i'>$i</label> ";
        if ($i % 7 == 0) echo "<br>";
    }
    ?>
    <p>Número de serie: <input type="text" name="serie"></p>
    <button name="jugar">Jugar</button>
</form>

<?php
if (isset($_POST["jugar"])) {
    echo "<p>Combinación ganadora: $n1, $n2, $n3, $n4, $n5, $n6</p>";
    echo "<p>Aciertos: $aciertos</p>";
    echo "<p>Premio: $premio euros</p>";
}
?>