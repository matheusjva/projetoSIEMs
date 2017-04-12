<?php

set_include_path("/usr/share/php");

require_once "Mail.php";

$username = 'matheusjva@gmail.com';
$password = 'apreciesuaJ0rnada';
$smtpHost = 'smtp.gmail.com';
$smtpPort = '587';
$to = $_POST['contatos'];
$from =  'matheusjva@gmail.com';


$subject = $_POST['assunto'];
$replyTo = '';
$name = '';
$body = $_POST['mensagem'];


$headers = array(
    'From' => $name . " <" . $from . ">",
    'To' => $to,
    'Subject' => $subject
);
$smtp = Mail::factory('smtp', array(
            'host' => $smtpHost,
            'port' => $smtpPort,
            'auth' => true,
            'username' => $username,
            'password' => $password
        ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo($mail->getMessage());
} else {
    echo 'Mensagem enviada com sucesso! <br />';

   echo '<a href="/projetoSIEMs/home/homepage.php">Voltar</a>';

   
}


?>