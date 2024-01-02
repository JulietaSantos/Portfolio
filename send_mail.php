<?php
// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Dirección de correo electrónico a la que se enviará el mensaje
$to = "julietasantos98@gmail.com";

// Asunto del correo electrónico
$subject = "Mensaje desde el formulario de contacto portfolio digital";

// Cuerpo del correo electrónico
$body = "Nombre: $name\n\nEmail: $email\n\nMensaje:\n$message";

// Encabezados del correo electrónico
$headers = "From: $email";

// Enviar el correo electrónico
if (mail($to, $subject, $body, $headers)) {
    echo "Correo electrónico enviado correctamente";
} else {
    echo "Error al enviar el correo electrónico";
}
?>
