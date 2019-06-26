

<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "mgiovnna@gmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['name'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel 
//$assunto
$email = $_POST['email'];
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
.$_POST['message'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n"; 
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender: ".$email."\n"; 
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@dominio.com.br>\n"; 
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $mensagem, $headers);  //função que faz o envio do email.
?>





<!-- <?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'De: ';
$to = 'mgiovnna@gmail.com';
$subject = 'Website';
$human = $_POST['human'];

$body = "De: $name\n E-Mail: $email\n Mensagem:\n $message";

if ($_POST['submit']) {
if ($name != '' && $email != '') {
if ($human == '4') {
if (mail ($to, $subject, $body, $from)) {
echo '<p>Sua mensagem foi enviada!</p>';
} else {
echo '<p>Algo deu errado, volte e tente novamente!</p>';
}
} else if ($_POST['submit'] && $human != '4') {
echo '<p>Voc&ecirc; respondeu ao anti-spam incorretamente!</p>';
}
} else {
echo '<p>Voc&ecirc; precisa responder todas as quest&otilde;es!!</p>';
}
}
?>
 -->