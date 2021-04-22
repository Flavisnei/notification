<?php
require __DIR__ .'/lib_ext/autoload.php';
use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste","<p><b>Olá mundo</b></p>","sac@briaconfeccoes.com.br","Supervisor","flavisnei@gmail.com","Flavisnei Favalessa");


var_dump($novoEmail);
