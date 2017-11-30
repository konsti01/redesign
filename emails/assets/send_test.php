<?php
error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
ini_set('display_errors', "on");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$mail = new PHPMailer();
$mail->IsSMTP();                                          // SMTP-n keresztuli kuldes
$mail->Host     = 'localhost';                     // SMTP szerverek
$mail->SMTPAuth = true;                                   // SMTP
$mail->Port=222;

$mail->Username = 'postafiok@sajat-domain.hu';            // SMTP felhasználo
$mail->Password = 'secret';                               // SMTP jelszo

$mail->From     = 'test@meska.hu';            // Felado e-mail cime
$mail->FromName = 'Meskacsapat';                // Felado neve
$mail->AddAddress('josh@site.com', 'Josh Adams');         // Cimzett es neve
$mail->AddAddress('ellen@site.com');                      // Meg egy cimzett
$mail->AddReplyTo('info@sajat-domain.hu', 'Information'); // Valaszlevel ide

$mail->WordWrap = 80;                                     // Sortores allitasa
//$mail->AddAttachment('/var/tmp/file.tar.gz');             // Csatolas
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');        // Csatolas mas neven
$mail->IsHTML(true);                                      // Kuldes HTML-kent

$mail->Subject = 'Here is the subject';                   // A level targya
$mail->Body    = 'This is the <b>HTML body</b>';          // A level tartalma
$mail->AltBody = 'This is the text-only body';            // A level szoveges tartalma

if (!$mail->Send()) {
    echo 'A levél nem került elküldésre';
    echo 'A felmerült hiba: ' . $mail->ErrorInfo;
    exit;
}

echo 'A levelet sikeresen kiküldtük';
?>