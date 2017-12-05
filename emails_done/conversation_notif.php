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
            padding: 5px 100px;
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
            width: 200px;
            margin: 1% 0;
        }
        .text-content{
            padding: 1% 5%;
        }
        .text-content strong{
            font-size: 16px;
        }
        .text-content a{
            color: #88B04B;
            text-decoration: none;
        }
        .message{
            border: 1px solid #88B04B;
            padding: 10px;
            margin: 10px 0 0 0;
            border-radius: 5px;
        }
        .reply-button{
            border: 1px solid #88B04B;
            border-radius: 5px;
            color: #88B04B;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
            height: 24px;
            line-height: 22px;
            padding: 5px 10px;
            margin: 10px 0 0 0;
        }

        .clear{
            clear: both;
        }

        @media (max-width: 424px){
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                width: 200px !important;
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
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                width: 250px !important;
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
            .wrapper{
                width: 100%;
            }
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
        } /*SM*/
        @media (min-width: 1101px) and (max-width: 1300px){
            .wrapper{
                width: 100%;
            }
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
            border-top: 1px solid #ddd;
        }
        .benefits .row{
            padding: 20px 20px;
            border-bottom: 1px solid #ddd;
        }
        .benefits .row .icon{
            float: left;
            width: 13%;
            text-align: center;
        }
        .benefits .row .icon img{
            width: 70%;
        }
        .benefits .row .desc{
            float: left;
            width: 87%;
        }
        .benefits .row .desc h2{}
        .benefits .row .desc p{}

        @media (max-width: 424px){
            .wrapper .container{
                font-size: 12px !important;
            }
            .wrapper .container h1{
                font-size: 24px !important;
            }
        } /*XXS*/
        @media (min-width: 425px) and (max-width: 767px){
            .wrapper .container{
                font-size: 14px !important;
            }
            .wrapper .container h1{
                font-size: 32px !important;
            }
        } /*XS*/
        @media (min-width: 768px) and (max-width: 1100px){
            .wrapper .container{
                font-size: 16px !important;
            }
            .wrapper .container h1{
                font-size: 48px !important;
            }
        } /*SM*/
        @media (min-width: 1101px) and (max-width: 1300px){
            .wrapper .container{
                font-size: 16px !important;
            }
        } /*MD*/
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
            Belső üzeneted érkezett <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu"><?= App_Helper_Domain::hungarize($domain, true) ?>.hu</a> oldalán az alábbi felhasználótól: admin.<br><br>
        <?php } else { ?>
            Belső üzeneted érkezett <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu"><?= App_Helper_Domain::hungarize($domain, true) ?>.hu</a> oldalán az alábbi felhasználótól: <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/UserProfil/index/<?= $sender_id ?>"><?= $sender ?></a>.<br><br>

            Kérjük, erre az üzenetre ne válaszolj, az üzenet küldőjének <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/Conversations/readMessage/<?= $message_id ?>">ide kattintva válaszolhatsz</a>.<br><br>
        <?php } ?>

        Üdvözlettel,<br><br>
        A Meska.hu csapata

        <div class="message">
            <?= $sender ?> üzenetének szövege:
            <br>
            <br>
            <?php if ($isgroup) { ?>
                <?= $message ?>
            <?php } else { ?>
                <?= nl2br($message) ?>
            <?php } ?>

            <?php
            if ($pid) {
                ?>
                <br><br>
                Üzenetküldést az alábbi termék oldaláról kezdeményezték: <a href="<?=App_Controller::$_urlPrefixStatic?>/ProductView/index/<?= $pid ?>"><?= $product_name ?></a>
            <?php } ?>
        </div>
        <div class="reply-button">
            <?php if ($sender != null) { ?>
                <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/Conversations/readMessage/<?= $message_id ?>">Válasz <?= $sender ?> üzenetére</a>
            <?php } ?>
        </div>
    </div>

    <!-- BENEFITEK -->
    <div class="benefits">
            <div class="row">
                <div class="icon">
                    <img src="http://www.meska.hu/images/email/meska-email-lock-icon.png">
                </div>
                <div class="desc">
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0; margin-bottom: 20px;">Biztonságos tranzakciók</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">A Meska.hu oldalait biztonságos (SSL / https) kapcsolaton keresztül böngészed » erre utal a böngésző címsorában megjelenő kis zöld lakat is. Vásárlási adataidat 3. fél nem láthatja, nálunk biztonságban vagy!</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row">
                <div class="icon">
                    <img src="http://www.meska.hu/images/email/meska-email-shield-icon.png">
                </div>
                <div class="desc">
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0;  margin-bottom: 20px;">Meska garancia</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">Amennyiben bankkártyával egyenlíted ki vásárlásod ellenértékét, az átutalt összeg a postázás után 8 nappal kerül az eladó számlájára, így addig jelezheted nekünk, ha a termék valamilyen okból nem felel meg a leírtaknak; a pénzed és a vásárlásod ez időszak alatt extra biztonságban van, garantáljuk. </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row">
                <div class="icon">
                    <img src="http://www.meska.hu/images/email/meska-email-oneclick-icon.png" class="picto" style="width: 70%;">

                </div>
                <div class="desc">
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0;  margin-bottom: 20px;">Belépés egy kattintással</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">
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
                    <img src="http://www.meska.hu/images/email/meska-email-card-icon.png" class="picto" style="width: 70%;">

                </div>
                <div class="desc">
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0;  margin-bottom: 20px;">Fizetés gyorsan, kényelmesen, bankkártyával</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">
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
        <img src="http://assets.meska.hu/images/logo/logo.png" class="logo" style="width: 20%; margin: 2% auto 0 auto; display: block;">
        <p class="center" style="text-align: center; color: #555555; line-height: 1.5em; font-size: 1.3em;">
            <a href="https://www.facebook.com/meska.hu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-facebook-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
            <img src="http://www.meska.hu/images/email/meska-email-social-twitter-icon.png" class="picto mini" style="width: 4%; margin: 1%;">
            <a href="https://www.instagram.com/meska.hu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-instagram-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
            <a href="https://www.youtube.com/user/MeskaVideo" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-youtube-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
            <img src="http://www.meska.hu/images/email/meska-email-social-google-icon.png" class="picto mini" style="width: 4%; margin: 1%;">
            <a href="https://hu.pinterest.com/meskahu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-pinterest-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
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
