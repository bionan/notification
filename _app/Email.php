<?php 

namespace Notification;
use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public function __construct()
    {   
        $email = new PHPMailer;
    }

    public function sendMail() 
    {
        echo "Email enviado!";
    }
}