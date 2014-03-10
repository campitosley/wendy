<?php
$nombre=$_POST['nombre'];
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
$to  = 'jcampos@mexico-movil.com' . ', '; // note the comma
$to .= 'rapidclimate@gmail.com';

// subject
$subject = 'Birthday Reminders for August';

// message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

echo 'Correo enviado con exito  '.$nombre;
/*printf("Correo enviado con exito!");*/





