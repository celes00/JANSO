<?php /* para el envio del formulario */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $message = $_POST["message"];

  // Configura los detalles del correo electrónico
  $to = "mariacelesteantelo@gmail.com";
  $subject = "Consulta de la página web - " . $name . " - " . $company;
  $body = "Nombre: " . $name . "\n" . "Empresa: " . $company . "\n" . "Correo electrónico: " . $email . "\n\n" . "Mensaje:\n" . $message;

  // Envía el correo electrónico
  $headers = "From: " . $email . "\r\n";
  if (mail($to, $subject, $body, $headers)) {
    echo "Mensaje enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el mensaje.";
  }
}
?>
