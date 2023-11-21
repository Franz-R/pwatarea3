<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanzas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>

<?php
// Generar un número aleatorio entre 1 y 10
$numeroAleatorio = rand(1, 10);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado por el usuario
    $numeroUsuario = isset($_POST['numero']) ? (int)$_POST['numero'] : null;

    if ($numeroUsuario !== null) {
        // Verificar si el número ingresado es correcto
        if ($numeroUsuario == $numeroAleatorio) {
            echo "<h2>¡Felicidades! Has adivinado el número $numeroAleatorio.</h2>";
        } else {
            echo "<p>¡Oh no! Intenta nuevamente.</p>";
        }
    } else {
        echo "<p>Por favor, ingresa un número.</p>";
    }
}
?>

<h1>Juego de Adivinanzas</h1>
<p>Intenta adivinar un número entre 1 y 10.</p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="numero">Tu elección:</label>
    <input type="number" id="numero" name="numero" min="1" max="10" required>
    <br><br>
    <input type="submit" value="Verificar">
</form>

</body>
</html>
