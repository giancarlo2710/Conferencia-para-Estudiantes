<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Usuario de prueba
    $correo_correcto = "giansepulveda@conferencia2026.com";
    $password_correcta = "gianpaolo7";

    if ($correo == $correo_correcto && $password == $password_correcta) {

        echo "<h2>Bienvenido al Sistema</h2>";
        echo "<p>Inicio de sesión correcto.</p>";

    } else {

        echo "<h2>Error</h2>";
        echo "<p>Correo o contraseña incorrectos.</p>";

        echo "<br><a href='index.html'>Volver</a>";
    }

} else {

    echo "Acceso no permitido.";

}
?>