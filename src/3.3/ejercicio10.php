// 10. Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la
pirámide debe estar formada por 9 asteriscos. <br><br>

<?php 
    $asteriscos = "*";
    $aire = "&nbsp;&nbsp;&nbsp;&nbsp;";

    for ($i = 0; $i < 5; $i++) {
        echo $aire. " " . $asteriscos;     
        echo "<br>";
        $aire = substr($aire, 6); 
        $asteriscos = "**".$asteriscos;
    }
?>

<br>
<br>
<p>Piramide hecha con chatgpt para probar si queda mejor</p>
<p>El * es mas pequeño que " " por lo que queda mal de la forma anterior</p>

<!-- ESTA PIRAMIDE LA SAQUE DEL CHAT POR QUE QUEDA MAS BONITA SI NO LO USAS EL ESPACIO OCUPA DIFERENTE AL *-->
<?php 
    $asteriscos = "*";
    $aire = "    ";

    for ($i = 0; $i < 5; $i++) {
    // Esto lo busque en el chatgpt por que la piramide quedaba daleada
        echo "<div style='white-space: pre; font-family: monospace;'>" 
            . $aire . $asteriscos .
            "</div>";

        $aire = substr($aire, 1); 
        $asteriscos = "**" . $asteriscos;
    }
?>