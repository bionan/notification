<?php
require __DIR__ . '/bib-ext/autoload.php';


use Notification\Email;

$novoEmail = new Email;
//var_dump($novoEmail);
try
{
$novoEmail->sendMail("Assunto de teste", "Corpo da mensagem", "reply@gmail.com", "Nome de replay", "enviarpara@gmail.com", "Enviar nome");
}
catch (Exception $e)
{
    echo "Falha no envio do email: {$e->getMessage()}";
}