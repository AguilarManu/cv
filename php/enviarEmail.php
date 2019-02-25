<?php
// the message
$nom_visitante = $_POST['name'];
$msg_visitante = $_POST['message'];
$email_visitante = $_POST['email'];
$asunto_visitante = $_POST['asunto'];

$para      = 'manuel.aguilar.lpz19@gmail.com';
$titulo    = 'El título';
$mensaje   = 'Mesnaje Hola';
$cabeceras = 'From: CurriculumManue@gmail.com' . "\r\n" .
    'Reply-To: CurriculumManue@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);



// use wordwrap() if lines are longer than 70 characters
// $msg_visitante = wordwrap($msg_visitante,70);

// // send email
// mail("manuel.aguilar.lpz19@gmail.com",$asunto_visitante,'Nombre del que comentó: '.$nom_visitante.'<br/>Mensaje dejado: '.$msg_visitante.'<br/>Correo: '.$email_visitante);
header('Location: ../index.html');
// exit;
// echo "Mensaje enviado a mi correo";
?>