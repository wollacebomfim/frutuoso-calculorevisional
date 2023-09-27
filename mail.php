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
    $EmailEnviar->Username = 'wollace.bomfim@live.com';
    $EmailEnviar->Password = 'qkqvgqgpjobuplch';
    $EmailEnviar->Port = 587;

    $EmailEnviar->setFrom('wollace.bomfim@live.com');
    $EmailEnviar->addAddress('wollace.bomfim@live.com');

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