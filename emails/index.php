<?php

error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
ini_set('display_errors', "on");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer-master/src/PHPMailer.php';
require 'assets/PHPMailer-master/src/SMTP.php';
require 'assets/PHPMailer-master/src/Exception.php';

class Mailer{

    private $subject = '';
    private $body = '';
    private $recipients = array('spardasixx@gmail.com');

    public function content(){
        ob_start();
        include('fav_newsletter.php');
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }

    public function send(){
        $mail = new PHPMailer();
        $mail->IsSMTP();                                          // SMTP-n keresztuli kuldes
        $mail->Host     = 'localhost';                            // SMTP szerverek
        $mail->SMTPAuth = true;                                   // SMTP
        $mail->Port = 222;

        $mail->Username = 'secret';                               // SMTP felhasználo
        $mail->Password = 'secret';                               // SMTP jelszo

        $mail->From     = 'test@meska.hu';                        // Felado e-mail cime
        $mail->FromName = 'Meskacsapat';                          // Felado neve
        $mail->AddAddress('josh@site.com', 'Josh Adams');         // Cimzett es neve

        $mail->WordWrap = 80;                                     // Sortores allitasa
        $mail->IsHTML(true);                                      // Kuldes HTML-kent

        $mail->Subject = 'Here is the subject';                   // A level targya
        $mail->Body    = file_get_contents('fav_newsletter.php');                               // A level tartalma
        $mail->AltBody = 'This is the text-only body';            // A level szoveges tartalma

        if (!$mail->Send()) {
            echo 'A levél nem került elküldésre';
            echo 'A felmerült hiba: ' . $mail->ErrorInfo;
        } else {
            echo 'Pöpec!';
        }
    }
}

$m = new Mailer();
$m->send();
