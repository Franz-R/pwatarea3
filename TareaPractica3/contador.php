<?php
// Archivo index.php

// Inicializar la variable global 
if (!isset($visitas)) {
    $visitas = 0;
}

// Incrementar el contador de visitas
$visitas++;

// Guardar el número actual de visitas en la variable de sesión
session_start();
$_SESSION['visitas'] = $visitas;

// Mostrar el número de visitas en la página
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a mi sitio web</h1>
    <p>Esta página ha sido visitada <?php echo $visitas; ?> veces.</p>
</body>
</html>
