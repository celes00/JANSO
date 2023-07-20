<?php /* para el envio del formulario */
/* if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
} */
  /* $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $message = $_POST["message"];

  echo $name . " " . $email . " ". $company . " " . $message; */


  $correo = $_POST['correo'];
  $nombre = $_POST['nombre'];
  $mensaje = $_POST['mensaje'];
  
  
echo $correo . " " . $nombre . " " . $mensaje;
  
  
  $destinatario = "mariacelesteantelo@gmail.com";
  $asunto = "Envio de correo de prueba con PHP"; 
  $cuerpo = '
      <html> 
          <head> 
              <title>Prueba de envio de correo</title> 
          </head>
  
          <body> 
              <h1>Solicitud de contacto desde correo de prueba !  </h1>
              <p> 
                  Contacto:  '.$nombre . ' - ' . $asunto .'  <br>
                  Mensaje: '.$mensaje.' 
              </p> 
          </body>
      </html>
  ';
  //para el envío en formato HTML 
  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=UTF8\r\n"; 
  
  //dirección del remitente
  
  $headers .= "FROM: $nombre <$correo>\r\n";
  mail($destinatario,$asunto,$cuerpo,$headers);
  
  echo "Correo enviado"; 
  ?> 
  
  <a href="index.html">Volver a inicio</a>
?>
