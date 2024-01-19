<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dest = 'jr7090867@gmail.com';
    $nom = $_POST['nombre_apellidos'];
    $email = $_POST['correo_electronico'];
    $tlf = $_POST['telefono'];
    $serv = $_POST['servicio'];
    $msj = $_POST['mensaje'];

    $header = "From: $email";
    $mensaje = "Hola\nAtentamente: $nom\nEmail: $email\nTeléfono: $tlf\nServicio: $serv\nMensaje: $msj";

    // Verifica si el correo se envió correctamente
    if (mail($dest, 'Asunto del correo', $mensaje, $header)) {
        echo "<script>alert('Correo enviado exitosamente');</script>";
        echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
    } else {
        echo "<script>alert('Error al enviar el correo');</script>";
    }
}
?>