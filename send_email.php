<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'mariacelesteantelo@gmail.com'; // Dirección de correo de la compañía
    $subject = 'Mensaje de la página web: ' . $name;
    $body = "Recibiste un mensaje de: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensaje:\n$message";

    // Envío del correo electrónico
    if (mail($to, $subject, $body)) {
        echo '¡El correo se envió correctamente!';
    } else {
        echo 'Hubo un error al enviar el correo.';
    }
}
?>
