<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messsage'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'Nova Submissão';

$email_body = "Nome: $name.\n".
                "Email do usuário: $visitor_email.\n"
                "Assunto: $subject.\n"
                "Texto: $message.\n";

$to = 'nickmitjansnunes@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location: Contatos.html")
>