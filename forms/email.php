<?php


if(isset($_POST['email']) && !empty($_POST['email'])) {

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "verasbruna53@gmail.com";
$subject = "Contato";
$body = "Nome: "


$to = "verasbruna53@gmail.com";
$subject = "Solicitação";
$body = "Nome: ".$nome. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: brunaingri@live.com" . "\r\n".
        ."Reply-To:".$email."\r\n".
        ."X-Mailer:PHP/".phpversion();
        
if(mail($to,$subject,$body,$header)){

    echo("E-mail enviado com sucesso!")

}else{
    echo("O e-mail não pode ser enviado.");
}


}

?>