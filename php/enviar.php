<?php

  //$enviado = 'Enviado: ' . date("Y-m-d H:i:s") . "\n";
  $subject = "MENSAJES DEL PORTAFOLIO WEB";
  $message = $_POST['message'];
  $email   = $_POST['email'];
  $nombre  = $_POST['name'];

  // Cargando la librería de PHPMailer
  require '../PHPMailer/PHPMailerAutoload.php';

  // Creando una nueva instancia de PHPMailer
  $mail = new PHPMailer();


  // Indicando el uso de SMTP
  $mail->isSMTP();

  // Habilitando SMTP debugging
  // 0 = apagado (para producción)
  // 1 = mensajes del cliente
  // 2 = mensajes del cliente y servidor
  $mail->SMTPDebug = 0;

  // Agregando compatibilidad con HTML
  $mail->Debugoutput = 'html';

  // Estableciendo el nombre del servidor de email
  $mail->Host = 'smtp.gmail.com';

  // Estableciendo el puerto
  $mail->Port = 587;

  // Estableciendo el sistema de encriptación
  $mail->SMTPSecure = 'tls';

  // Para utilizar la autenticación SMTP
  $mail->SMTPAuth = true;

  // Nombre de usuario para la autenticación SMTP - usar email completo para gmail
  $mail->Username = "narenmartinez20@gmail.com";

  // Password para la autenticación SMTP
  $mail->Password = "";

  // Estableciendo como quién se va a enviar el mail
  $mail->setFrom('usuario@gmail.com', 'PORTAFOLIO WEB');

  // Estableciendo a quién se va a enviar el mail
  $mail->addAddress('nmartinezc97@hotmail.com', '');

  // El asunto del mail
  $mail->Subject = $subject;

  // Estableciendo el mensaje a enviar
  $mail->MsgHTML("Nombre: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Mensaje: " . $message);

  // Enviando el mensaje y controlando los errores
  if (!$mail->send()) {
    echo "No se pudo enviar el correo. Intentelo más tarde.";
  } else {
    echo "Gracias por contactarnos.";
  }
?>
