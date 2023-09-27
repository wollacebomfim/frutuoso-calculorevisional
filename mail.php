<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPmailer\PHPMailer;
use PHPMailer\PHPmailer\SMTP;
use PHPMailer\PHPmailer\Exception;

$EmailEnviar = new PHPMailer(true);

try {
    $EmailEnviar->SMTPDebug = SMTP::DEBUG_SERVER;
    $EmailEnviar->isSMTP();
    $EmailEnviar->Host = 'smtp.office365.com';
    $EmailEnviar->SMTPAuth = true;
    $EmailEnviar->Username = '';
    $EmailEnviar->Password = '';
    $EmailEnviar->Port = 587;

    $EmailEnviar->setFrom('');
    $EmailEnviar->addAddress('');

    $EmailEnviar->isHTML(true);
    $EmailEnviar->Subject = 'Teste email via microsoft';
    $EmailEnviar->Body = 'Chegou Email';
    $EmailEnviar->Altbody = 'Chegou email';


    if($EmailEnviar->send()) {
        echo 'Email enviado com sucesso';

    }else{
        echo 'Email nao enviado';
    }
}catch (Exception $e){
    echo "Erro ao enviado mensagem: {$EmalEnviar->ErrorInfo}";
}

?>
