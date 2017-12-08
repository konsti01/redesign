<?php
session_start();

    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    ini_set('display_errors', "on");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'assets/PHPMailer-master/src/PHPMailer.php';
    require 'assets/PHPMailer-master/src/SMTP.php';
    require 'assets/PHPMailer-master/src/Exception.php';

    class Mailer{
        public function content(){
            ob_start();
            include('fav_newsletter.php');
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function send(){
            $recipients = array(
                'spardasixx@gmail.com' => 'Görbicz Roland',/*
                'info@ux-studio.com' => 'Czár Milán',
                'akos.meska@gmail.com' => 'Konstanczer Ákos',
                'airporst@gmail.com' => 'Porst Réka',
                'hello@meska.hu' => 'Kovács Lóránt',
                'prepostffyzs@gmail.com' => 'Prepostffy Zsuzsa',*/
            );

            $mail = new PHPMailer();
            $mail->IsSMTP();                                          // SMTP-n keresztuli kuldes
            $mail->Host     = 'mnb-software.com';                     // SMTP szerverek
            $mail->SMTPAuth = true;                                   // SMTP
            $mail->Port = 587;

            $mail->Username = 'mailtest@mnb-software.com';            // SMTP felhasználo
            $mail->Password = 'kizZxdNvPSHL9';                        // SMTP jelszo

            $mail->CharSet  = "utf-8";                                // Karakter kódolás

            $mail->From     = 'mailtest@mnb-software.com';                        // Felado e-mail cime
            $mail->FromName = 'Meska.hu';                          // Felado neve

            foreach($recipients as $email => $name){
                $mail->AddAddress($email, $name);                     // Címzett e-mail és név
            }

            $mail->WordWrap = 80;                                     // Sortores allitasa
            $mail->IsHTML(true);                                      // Kuldes HTML-kent

            $date = date("Y F jS");
            $id = '0123456789'.date(ymd);

            $recipient = 'Címzett';

            $mail->Subject = '[Meska] '.$recipient.', kedvenc alkotóid legújabb termékei #'.$id;                   // A level targya
            $mail->Body    = $this->content();                        // A level tartalma
            $mail->AltBody = 'This is the text-only body';            // A level szoveges tartalma

            if (!$mail->Send()) {
                echo 'A levél nem került elküldésre';
                echo 'A felmerült hiba: ' . $mail->ErrorInfo;
            } else {
                echo 'Az e-mailt elküldtük!';
            }
        }
    }

if(isset($_SESSION['username'])){

    $m = new Mailer();
    $m->send();
}
else{
    echo 'Nem vagy bejelentkezve!';
}
