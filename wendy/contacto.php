<?php
$nombre=$_POST['nombre'];
$to=$_POST['email'];
$asunto_completo='Has recibido un mensaje de la pagina shotcretemexico enviado por un cliente interesado. '. "\r\n"
        .'; El mensaje enviado es de: Mensaje enviado por: '.$_POST['email'].' El asunto es: '.$_POST['asunto'].'  De la empresa: '.$_POST['empresa']. ' con el siguiente mensaje: '.$_POST['mensaje'];
/*
 * CASO 1 MAIL

// The message
$message = "Line 1\r\nLine 2\r\nLine 3";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Send
mail('jcampos@mexico-movil.com', 'My Subject', $message);

*/


/*
 * CASO 2 MAIL



$to      = 'jcampos@mexico-movil.com';
$subject = 'Inicio';
$message = 'hola';
$headers = 'From: contacto@shotcretemexico.com' . "\r\n" .
    'Reply-To: contacto@shotcretemexico.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


*/
/*
 * 
 * CASO 3 EL MEJOR
 */



// subject
$subject = 'Shotcrete México S.A. de C.V.';

// message
$message = '
<html>
<head>
  <title></title>
</head>
<body>
<center><h1>Shotcrete Mexico S.A. de C.V. </h2>
  <p>Gracias por contactarnos!!!</p>
  <p>En breve nos pondremos en contacto contigo</p>
  </center>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: Shotcrete Mexico S.A. de C.V. <contacto@shotcretemexico.com>' . "\r\n";
$headers .= 'Cc: contacto@shotcretemexico.com' . "\r\n";
$headers .= 'Bcc: contacto@shotcretemexico.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);




//Correo para shotcrete

mail('contacto@shotcretemexico.com','Ha escrito un cliente!!',$asunto_completo,$headers);
mail('rapidclimate@gmail.com','Ha escrito un cliente!!',$asunto_completo,$headers);
echo 'Correo enviado con exito  '.$nombre;
/*printf("Correo enviado con exito!");*/





