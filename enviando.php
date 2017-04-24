<?php

set_include_path("/usr/share/php");

require_once "Mail.php";
require_once "db.class.php";

$objdb = new db();
$link = $objdb->conecta_pg();

//Insere a mensagem e o assunto na tabela envio_msg
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$sqlassunto = "INSERT INTO envio_msg(assunto) VALUES ('$assunto')";
$sqlmensagem = "INSERT INTO envio_msg(conteudo) VALUES ('$mensagem')";


pg_query($link, $sqlassunto);
pg_query($link, $sqlmensagem);



//Identifica se é e-mail ou celular e insere na devida coluna da tabela agenda
$todoscontatos = $_POST['contatos'];


$transf_string = implode(',', $todoscontatos);


$separar_contatos = explode(',', $transf_string);

$contador = count($separar_contatos);

$stringemail = "";
$arraysms[] = array();
$a = 1;

for ($i=0; $i < $contador ; $i++) { 
        
        if (stripos($separar_contatos[$i],'@')){

            $stringemail = $separar_contatos[$i] . ", " . $stringemail;

            $sql1 = "INSERT INTO agenda(email) VALUES ('" . $separar_contatos[$i] . "')";

            pg_query($link, $sql1);
            
        }
        else{
            
            $arraysms[] = $separar_contatos[$i];
            
            $sql2 = "INSERT INTO agenda(telefone) VALUES ('" . $arraysms[$a] . "')";

            pg_query($link, $sql2);
            
            $a ++;
        }
}



/*
//Envio para E-mail
$username = 'matheusjva@gmail.com';
$password = 'apreciesuaJ0rnada';
$smtpHost = 'smtp.gmail.com';
$smtpPort = '587';
$to = $stringemail;
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



//Verifica se os e-mails foram enviados
if (PEAR::isError($mail)) {
    echo($mail->getMessage());
} 
else {
        echo 'Mensagens enviadas com sucesso! <br />';

        echo '<a href="/projetoSIEMs/home/homepage.php">Voltar</a>';
    }

*/


?>