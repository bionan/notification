<?php
require __DIR__ . '/bib-ext/autoload.php';


use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail();