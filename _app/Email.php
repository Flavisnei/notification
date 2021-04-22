<?php

namespace Notification;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email{
    
    private $mail = \stdClass::class;
    
    public function __construct() {
        $this->mail = new PHPMailer(true);
        #$this->SMTPDebug = SMTP::DEBUG_SERVER;                          //Enable verbose debug output
        $this->mail->SMTPDebug = 2;                          //Enable verbose debug output
        $this->mail->isSMTP();                                                //Send using SMTP
        $this->mail->Host       = 'smtpv.f1.ultramail.com.br';               //Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                       //Enable SMTP authentication
        $this->mail->Username   = 'suporte=pimentavirtual.com.br';            //SMTP username
        $this->mail->Password   = 'Sup93-95-97B';                             //SMTP password
        #$this->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->SMTPSecure = 'tls';                                      //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 587;                                        //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('suporte@pimentavirtual.com.br', 'Flavisnei Favalessa');
        

    }
    
    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName) {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;
        
        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail,$addressName);
        
        try{
            $this->mail->send();
        } catch (Exception $ex) {
            echo"Erro ao enviar o email; {$this->mail->ErrorInfo} {$ex->getMessage()}";
        }        
    }
}
