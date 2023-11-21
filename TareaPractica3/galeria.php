<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="galeria.css">
    <title>Galería de Imágenes</title>
   
</head>
<body>
    
    <div class="gallery">
        <h1>Galería de Imágenes</h1>
        <ul>
            <?php
                $directory = "imagenes/";
                $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);

                foreach($images as $image) {
                    echo "<li><img src='$image' alt='Imagen'></li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
