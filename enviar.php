<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');



$nome = $_POST['nome'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$tipo = $_POST['tipo'];
//$valorfinanciado = $_POST['valorfinanciado'];
$quantidadeparcelastotal = $_POST['quantidadeparcelastotal'];
//$quantidadeparcelasvencer = $_POST['quantidadeparcelasvencer'];
$quantidadeparcelaspagas = $_POST['quantidadeparcelaspagas'];
$valorparcelas = $_POST['valorparcelas'];
$parcelaematraso = $_POST['parcelaematraso'];
$mensagem = $_POST['mensagem'];
/*
$arquivo = '
echo "<tr>";
echo "<td> <b>Nome:</b>&nbsp;&nbsp;".$nome."</td></br>";
echo "<td> <b>E-mail:</b>&nbsp;&nbsp;".$email."</td></br>";
echo "<td> <b>Numero:</b>&nbsp;&nbsp;".$numero."</td></br>";
echo "<td> <b>Tipo do Contrato:</b>&nbsp;&nbsp;".$tipo."</td></br>";
//echo "<td> <b>Valor Financiado:</b>&nbsp;&nbsp;".$valorfinanciado."</td></br>";
echo "<td> <b>Valor Parcelas:</b>&nbsp;&nbsp;".$valorparcelas."</td></br>";
echo "<td> <b>Quantidade total de parcelas:</b>&nbsp;&nbsp;".$quantidadeparcelastotal."</td></br>";
//echo "<td> <b>Quantidade de parcelas a vencer:</b>&nbsp;&nbsp;".$quantidadeparcelasvencer."</td></br>";
echo "<td> <b>Quantidade de parcelas pagas:</b>&nbsp;&nbsp;".$quantidadeparcelaspagas."</td></br>";
echo "<td> <b>Existe parcela em Atraso ?:</b>&nbsp;&nbsp;".$parcelaematraso."</td></br>";
echo "<td> <b>Mensagem:</b>&nbsp;&nbsp;".$mensagem."</td></br>";
echo "</tr>"; ';

*/

$quantidadeparcelasvencer = $quantidadeparcelastotal - $quantidadeparcelaspagas;
$var25 = 25.0 / 100.0; //25%

$primeiraVariavel = $valorparcelas * $quantidadeparcelastotal;

$segundaVariavel = $primeiraVariavel - ($primeiraVariavel * $var25); 

$terceiraVariavel = $segundaVariavel - ($valorparcelas * $quantidadeparcelaspagas);

$parcelareduzida = $terceiraVariavel / $quantidadeparcelasvencer;

echo "<td><b>O valor da sua parcela reduzida é:</b>&nbsp;".$parcelareduzida."</td>";

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
    $EmailEnviar->addAddress('ti.frutuoso@frutuosoadvocacia01.adv.br');

    $EmailEnviar->isHTML(true);
    $EmailEnviar->Subject = 'Envio de Calculo Revisonal';
    $EmailEnviar->Body = "
    <b>Nome completo:</b>&nbsp;$nome<br>
    <b>E-mail:</b>&nbsp$email<br>
    <b>Numero:</b>&nbsp;$numero<br>
    <b>Tipo do Contrato:</b>&nbsp;$tipo<br>
    <b>Valor da parcela:</b>&nbsp;$$valorparcelas<br>
    <b>Quantidade total de parcelas:</b>&nbsp;$quantidadeparcelastotal<br>
    <b>Quantidade de parcelas pagas:</b>&nbsp;$quantidadeparcelaspagas<br>
    <b>Existe parcela em atraso ?:</b>&nbsp;$parcelaematraso<br>
    <b>Mensagem:</b>&nbsp;$mensagem<br>
    <b>O valor da parcela reduzida:</b>&nbsp;$$parcelareduzida

    ";



    if($EmailEnviar->send()) {
        echo 'Email enviado com sucesso';

    }else{
        echo 'Email nao enviado';
    }
}catch (Exception $e){
    echo "Erro ao enviado mensagem: {$EmalEnviar->ErrorInfo}";
}


?>