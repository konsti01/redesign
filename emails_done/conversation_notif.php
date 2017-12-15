<?php include_once('data.php'); ?>

<!DOCTYPE html>
<html style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; color: #555555; font-size: 1vw;">
<head>
    <title>Belső üzenet értesítő</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Responsive Style -->
    <style scoped>
        body{
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
            color: #555555;
            font-size: 1em;
            margin-top: 0.5%;
        }
        .wrapper{
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 0.5vw;
            width: 99%;
            margin: 0 auto 0 auto;
        }
        .wrapper .content a{
            text-decoration: none;
        }
        .header{
            padding: 5px 0px;
            position: relative;
            text-align: center;
            border-bottom: 5px solid #006600;
        }

        .header:after {
            content: "";
            display: table;
            clear: both;
        }
        .header img{
            height: 45px;
            margin: 1% 0;
        }
        .text-content{
            padding: 3% 5%;
            font-size: 16px;
        }
        .text-content a{
            color: #88B04B;
            text-decoration: none;
        }
        .message{
            background-color: #F8F8F8;
            padding: 50px;
            margin: 3% 0 0 0;
            border-radius: 5px;
            font-weight: bold;
            font-size: 18px;
        }
        .text-content .quote-icon{
            position: absolute;
            top: 135px;
            left: 1000px;;
        }
        .message .from{
            float: left;
            width: 15%;
            font-weight: normal;
        }
        .message .from img{
            border-radius: 50%;
            height: 77px;
            margin: 0 15px 0 15px;
        }
        .message .content{
            float: left;
            width: 85%;
            height: 170px;
            line-height: 40px;
            background: -webkit-linear-gradient(#000, #000, transparent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .message .sub{
            font-weight: normal;
        }
        .reply-button{
            background-color: #88B04B;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            height: 24px;
            width: 250px;
            line-height: 22px;
            padding: 5px 10px;
            margin: 3% auto 0 auto;
            text-align: center;
        }
        .reply-button a{
            color: #fff;
        }

        .clear{
            clear: both;
        }

        @media (max-width: 424px){
            .wrapper .logo{
                width: 200px !important;
            }

            .text-content{
                font-size: 14px;
                text-align: center;
            }
            .message{
                text-align: left;
            }

            .wrapper .center{
                font-size: 12px;
            }
            .wrapper .center img{
                width: 40px !important;
            }
            .links a{
                font-size: 12px !important;
                width: 100% !important;
            }
            .grey-bg .footer p{
                font-size: 12px !important;
            }
        } /*XXS*/
        @media (min-width: 425px) and (max-width: 767px){
            .wrapper .logo{
                width: 250px !important;
            }

            .text-content{
                font-size: 14px;
                text-align: center;
            }
            .message{
                text-align: left;
            }

            .wrapper .center{
                font-size: 14px;
            }
            .wrapper .center img{
                width: 50px !important;
            }
            .links a{
                font-size: 14px !important;
                width: 100% !important;
            }
            .grey-bg .footer p{
                font-size: 14px !important;
            }
        } /*XS*/
        @media (min-width: 768px) and (max-width: 1100px){
            .wrapper .logo{
                width: 300px !important;
            }

            .text-content{
                font-size: 16px;
            }

            .wrapper .center{
                font-size: 16px;
            }
            .wrapper .center img{
                width: 60px !important;
            }
            .links a{
                font-size: 16px !important;
                width: 100% !important;
            }
            .grey-bg .footer p{
                font-size: 16px !important;
            }
        } /*SM*/
        @media (min-width: 1101px) and (max-width: 1300px){
            .wrapper .logo{
                width: 300px !important;
            }
            .wrapper .center{
                font-size: 16px;
            }
            .wrapper .center img{
                width: 60px !important;
            }
            .links a{
                font-size: 16px !important;
                width: 100% !important;
            }
            .grey-bg .footer p{
                font-size: 16px !important;
            }
        } /*MD*/

        /* BENEFITEK CSS */
        .benefits{
            margin: 0 0 20px 0;
        }
        .benefits .row{
            padding: 3% 5%;
            border-bottom: 1px solid #ddd;
        }
        .benefits .row .icon{
            float: left;
            text-align: center;
        }
        .benefits .row .icon img{
            height: 77px;
            margin: 0 20px 0 0;
        }
        .benefits .row .desc{
            float: left;
            width: 91%;
        }
        .benefits .row .desc h2{
            font-weight: normal;
            font-size: 20px;
            color: #555;
            margin: 0;
        }
        .benefits .row .desc p{
            font-size: 16px;
            color: #555;
            text-align: justify;
        }
        .benefits .row .desc ul{
            font-size: 16px;
            color: #555;
        }

        @media (max-width: 424px){
            .benefits .row{
                padding: 5px;
            }
            .benefits .row .icon{
                float: none;
                width: 100%;
                text-align: center;
            }
            .benefits .row .icon img{
                width: 30%;
                margin-top: 0px;
            }
            .benefits .row .desc{
                float: none;
                text-align: center;
            }
            .benefits .row .desc h2{
                font-size: 20px;
            }
            .benefits .row .desc p{
                font-size: 16px;
            }
            .benefits .row .desc ul{
                font-size: 16px;
                text-align: left;
            }
        } /*XXS*/
        @media (min-width: 425px) and (max-width: 767px){
            .benefits .row{
                padding: 5px;
            }
            .benefits .row .icon{
                float: none;
                width: 100%;
                text-align: center;
            }
            .benefits .row .icon img{
                width: 30%;
                margin-top: 0px;
            }
            .benefits .row .desc{
                float: none;
                width: 100%;
                text-align: center;
            }
            .benefits .row .desc h2{
                font-size: 20px;
            }
            .benefits .row .desc p{
                font-size: 16px;
            }
            .benefits .row .desc ul{
                font-size: 16px;
                text-align: left;
            }
        } /*XS*/
    </style>
</head>
<body>
<div class="wrapper">
    <!-- HEADER -->
    <div class="header">
        <img src="http://assets.meska.hu/images/logo/logo.png" class="logo">
    </div>

    <!-- TEXT CONTENT -->
    <div class="text-content">
        <strong>Kedves <?= $recipient ?>!</strong><br><br>

        <?php if ($sender == null) { ?>
            Belső üzeneted érkezett <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu"><?= App_Helper_Domain::hungarize($domain, true) ?>.hu</a> oldalon keresztül:<br><br>
        <?php } else { ?>
            Belső üzeneted érkezett <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu"><?= App_Helper_Domain::hungarize($domain, true) ?>.hu</a> oldalán az alábbi felhasználótól: <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/UserProfil/index/<?= $sender_id ?>"><?= $sender ?></a>.<br><br>

            (FONTOS! Ne erre az e-mailre válaszolj, mert az a Meska ügyfélszolgálatára jönne; hanem a Meskára belépve a felületén keresztül: <strong>nyomd meg az üzenet alatt található gombot!</strong>)
        <?php } ?>
        <img class="quote-icon" src="assets/img/quote-icon.png">
        <div class="message">
            <div class="from">
                <?= $sender ?><br>
                <img src="https://www.meska.hu/img/avatar/large/<?=$p['avatar']?>">
            </div>
            <div class="content">
                <?php if ($isgroup) { ?>
                    <?= $message ?>
                <?php } else { ?>
                    <?= nl2br($message) ?>
                <?php } ?>
            </div>
            <div class="clear"></div>
            <div class="sub">
                <?php
                if ($pid) {
                    ?>
                    <br><br>
                    Üzenetküldést az alábbi termék oldaláról kezdeményezték: <a href="<?=App_Controller::$_urlPrefixStatic?>/ProductView/index/<?= $pid ?>"><?= $product_name ?></a>
                <?php } ?>
            </div>
            <div class="reply-button">
                <?php if ($sender != null) { ?>
                    <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/Conversations/readMessage/<?= $message_id ?>">Teljes üzenet megtekintése</a>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- BENEFITEK -->
    <div class="benefits">
        <div class="row">
            <div class="icon">
                <img src="http://www.meska.hu/images/email/meska-email-lock-icon.png">
            </div>
            <div class="desc">
                <h2>Biztonságos tranzakciók</h2>
                <p>A Meska.hu oldalait biztonságos (SSL / https) kapcsolaton keresztül böngészed » erre utal a böngésző címsorában megjelenő kis zöld lakat is. Vásárlási adataidat 3. fél nem láthatja, nálunk biztonságban vagy!</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="icon">
                <img src="http://www.meska.hu/images/email/meska-email-shield-icon.png">
            </div>
            <div class="desc">
                <h2>Meska garancia</h2>
                <p>Amennyiben bankkártyával egyenlíted ki vásárlásod ellenértékét, az átutalt összeg a postázás után 8 nappal kerül az eladó számlájára, így addig jelezheted nekünk, ha a termék valamilyen okból nem felel meg a leírtaknak; a pénzed és a vásárlásod ez időszak alatt extra biztonságban van, garantáljuk. </p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="icon">
                <img src="http://www.meska.hu/images/email/meska-email-oneclick-icon.png">
            </div>
            <div class="desc">
                <h2>Belépés egy kattintással</h2>
                <p>
                    Amennyiben összekötöd Facebook fiókodat Meska fiókoddal (Fiókom / Alapadatok / Adatmódosítás » <a href="https://www.meska.hu/ModAcc" style="color: #84b848; text-decoration: none">https://www.meska.hu/ModAcc</a>) egyetlen kattintással be tudsz lépni Meska fiókodba. Ennek számos előnye van:
                <ul>
                    <li>Belépésnél nem kell beírni az e-mail címet és a jelszót</li>
                    <li>Elég a Facebook jelszavadat megjegyezni (sőt, ha be vagy lépve, akkor ez sem kell és tényleg csak egy kattintás)</li>
                    <li>Különböző mobileszközön is egyszerűbb a belépés, hiszen nem kell hosszú karaktersorokat bepötyögni a telefonodon, tableteden.</li>
                </ul>
                </p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="icon">
                <img src="http://www.meska.hu/images/email/meska-email-card-icon.png">
            </div>
            <div class="desc">
                <h2>Fizetés gyorsan, kényelmesen, bankkártyával</h2>
                <p>
                    Egyre több eladó boltjában lehet bankkártyával fizetni a Meskán is! Nem kell a termék átvételekor a pénzzel foglalkozni, plusz bankkártyás fizetés esetén a Meska garanciát vállal arra, hogy nem lesz probléma a vásárlással (részleteket lásd a következő pontban).
                </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <p class="huge center" style="text-align: center; color: #555555; margin-top:0.1em;">
            Reméljük, hogy minél hamarabb viszont látunk az oldalunkon!
        </p>
        <img src="http://assets.meska.hu/images/logo/logo.png" class="logo" style="height: 45px; margin: 2% auto 0 auto; display: block;">
        <p class="center" style="text-align: center; color: #555555; line-height: 1.5em; font-size: 1.3em;">
            <a href="https://www.facebook.com/meska.hu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-facebook-icon.png" class="picto mini" style="height: 35px; margin: 1%;"></a>
            <img src="http://www.meska.hu/images/email/meska-email-social-twitter-icon.png" class="picto mini" style="height: 35px; margin: 1%;">
            <a href="https://www.instagram.com/meska.hu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-instagram-icon.png" class="picto mini" style="height: 35px; margin: 1%;"></a>
            <a href="https://www.youtube.com/user/MeskaVideo" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-youtube-icon.png" class="picto mini" style="height: 35px; margin: 1%;"></a>
            <img src="http://www.meska.hu/images/email/meska-email-social-google-icon.png" class="picto mini" style="height: 35px; margin: 1%;">
            <a href="https://hu.pinterest.com/meskahu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-pinterest-icon.png" class="picto mini" style="height: 35px; margin: 1%;"></a>
        </p>
        <div class="container links" style="margin: 0 2% 0 2%; font-size: 1em; margin-top: 2%; text-align: center;">
            <a href="http://www.meska.hu/help" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">FAQ</a>
            <a href="http://www.meska.hu/Static/adatkezeles" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">Adatvédelmi szabályzat</a>
            <a href="http://www.meska.hu/Static/aff" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">Általános Felhasználási Feltételek</a>
            <a href="http://www.meska.hu/contact" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">Kapcsolat</a>
        </div>
        <div class="grey-bg" style="background-color: #eeeeee;">
            <div class="breaker" style="width: 100%; height: 0px; border-color: #dddddd; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; margin: 2% 0 2% 0;"> </div>

            <div class="container footer" style="margin: 0 2% 0 2%; padding:0 0 10px 0;color: #888888; font-size: 0.75em; line-height: 1.5em;">
                <p style="text-align: center; color: #555555; line-height: 1.5em; font-size: 1.3em;">
                    Ezt az e-mailt az {{.Email}} címre küldtük ki, mert a vásárlási folyamat félbeszakadt és erre figyelmeztetni szerettünk volna.
                </p>
                <p style="text-align: center; color: #555555; line-height: 1.5em; font-size: 1.3em;">
                    2008-201y &copy; Meska.hu Kft - Minden jog fenntartva.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
