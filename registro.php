<?php
// Verificar que el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $dni = $_POST["dni"];
    $instituto = $_POST["instituto"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];
    $edad = $_POST["edad"];
    $celular = $_POST["celular"];
    $turno = $_POST["turno"];
    $comentarios = $_POST["comentarios"];

} else {
    die("Acceso no permitido.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Exitoso</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            text-align:center;
        }

        .contenedor{
            width:700px;
            margin:40px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        td{
            border:1px solid #ccc;
            padding:10px;
            text-align:left;
        }

        h1{
            color:green;
        }

        a{
            text-decoration:none;
            background:#0d6efd;
            color:white;
            padding:10px 20px;
            border-radius:5px;
        }

        a:hover{
            background:#0b5ed7;
        }
    </style>

</head>

<body>

<div class="contenedor">

<h1>✅ Inscripción Registrada Correctamente</h1>

<p>Estos son los datos registrados:</p>

<table>

<tr>
    <td><strong>Nombre</strong></td>
    <td><?php echo htmlspecialchars($nombre); ?></td>
</tr>

<tr>
    <td><strong>Apellidos</strong></td>
    <td><?php echo htmlspecialchars($apellidos); ?></td>
</tr>

<tr>
    <td><strong>Correo</strong></td>
    <td><?php echo htmlspecialchars($correo); ?></td>
</tr>

<tr>
    <td><strong>DNI</strong></td>
    <td><?php echo htmlspecialchars($dni); ?></td>
</tr>

<tr>
    <td><strong>Instituto</strong></td>
    <td><?php echo htmlspecialchars($instituto); ?></td>
</tr>

<tr>
    <td><strong>Carrera</strong></td>
    <td><?php echo htmlspecialchars($carrera); ?></td>
</tr>

<tr>
    <td><strong>Semestre</strong></td>
    <td><?php echo htmlspecialchars($semestre); ?></td>
</tr>

<tr>
    <td><strong>Edad</strong></td>
    <td><?php echo htmlspecialchars($edad); ?></td>
</tr>

<tr>
    <td><strong>Celular</strong></td>
    <td><?php echo htmlspecialchars($celular); ?></td>
</tr>

<tr>
    <td><strong>Turno</strong></td>
    <td><?php echo htmlspecialchars($turno); ?></td>
</tr>

<tr>
    <td><strong>Comentarios</strong></td>
    <td><?php echo nl2br(htmlspecialchars($comentarios)); ?></td>
</tr>

</table>

<br><br>

<a href="index.html">⬅ Volver al formulario</a>

</div>

</body>
</html>