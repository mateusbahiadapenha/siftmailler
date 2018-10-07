<?php 
require_once './vendor/autoload.php';
$email= $_POST['email'];
$senha=$_POST['senha'];
$destinatario= $_POST['destinatario'];
$msg="teste de emvio de sift mailer";
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
  ->setUsername($email)
  ->setPassword($senha)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

$data= date('d/m/Y');
$message = (new Swift_Message('teste de email com sift mailler'.$data))
  ->setFrom([$email => 'mateus penha'])
  ->setTo([$destinatario])
  ->setBody($msg)
  ;

// Send the message
$result = $mailer->send($message);
echo "<h2>email enviado cm sucesso<h2>";

 ?>