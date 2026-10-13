<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Creador de estilos</title>
</head>

<body>
<?php
// Comprobamos si el formulario se ha enviado mediante el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Obtener y sanitizar los datos del formulario
    $bg_color = $_POST['bg'] ?? '#FFFFFF';
    $font_family = !empty($_POST['lt']) ? htmlspecialchars($_POST['lt']) : 'Arial, sans-serif';
    $text_align = $_POST['ta'] ?? 'left';

    // 2. Procesar la imagen del banner subida
    $banner_src = '';
    if (isset($_FILES['bi']) && $_FILES['bi']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['bi']['tmp_name'];
        $file_type = $_FILES['bi']['type'];
        
        // Convertimos la imagen a Base64 para mostrarla directamente sin guardar archivos en el servidor
        $data = file_get_contents($file_tmp);
        $banner_src = 'data:' . $file_type . ';base64,' . base64_encode($data);
    }
    ?>

    <!-- Página resultante con los estilos aplicados -->
    <style>
        body {
            background-color: <?php echo $bg_color; ?>;
            font-family: <?php echo $font_family; ?>;
            text-align: <?php echo $text_align; ?>;
            margin: 0;
            padding: 20px;
        }

        .banner {
            max-width: 100%;
            height: auto;
            max-height: 250px;
            display: block;
            margin: 0 auto 20px auto;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.85);
            padding: 20px;
            border-radius: 8px;
        }
    </style>

    <?php if ($banner_src): ?>
        <img src="<?php echo $banner_src; ?>" alt="Banner" class="banner">
    <?php endif; ?>

    <div class="container">
        <h1>Página Generada Exitosamente</h1>
        <p>Este contenido está formateado dinámicamente utilizando los parámetros que seleccionaste previamente en el formulario.</p>
        
        <hr>
        <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">← Volver a configurar estilos</a></p>
    </div>

<?php
} else {
    // Si no se ha enviado el formulario, mostramos la interfaz de configuración
?>
    <h1>Creador de estilos</h1>

    <p>
        Configura el aspecto de la página: color de fondo, tipo de letra,
        alineación del texto e imagen del banner.
    </p>

    <form action="" method="POST" enctype="multipart/form-data">
        <table border="1" align="center" cellpadding="8">
            <tr>
                <th><label for="bg">Color de fondo</label></th>
                <td><input type="color" id="bg" name="bg" value="#FFFFFF"></td>
            </tr>
            <tr>
                <th><label for="lt">Tipo de Letra</label></th>
                <td>
                    <select id="lt" name="lt">
                        <option value="Arial, sans-serif">Arial</option>
                        <option value="'Times New Roman', serif">Times New Roman</option>
                        <option value="'Courier New', monospace">Courier New</option>
                        <option value="'Verdana', sans-serif">Verdana</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="ta">Alineación Texto</label></th>
                <td>
                    <select id="ta" name="ta">
                        <option value="left">Izquierda</option>
                        <option value="center">Centro</option>
                        <option value="right">Derecha</option>
                        <option value="justify">Justificado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="bi">Imagen del Banner</label></th>
                <td><input type="file" id="bi" name="bi" accept="image/*"></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" value="Generar Página"></th>
            </tr>
        </table>
    </form>
<?php
}
?>

</body>

</html>