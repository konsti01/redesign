<?php include_once('data.php'); ?>

<!DOCTYPE html>
<html style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; color: #555555; font-size: 1vw;">
<head>
    <title>Kedvenc alkotóid termékei a Meskán</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Amatica+SC:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; color: #555555; font-size: 1em; margin-top: 0.5%;">
    <div class="wrapper" style="background-color: #ffffff; border: 1px solid #dddddd; border-radius: 0.5vw; width: 99%; margin: 0 auto 0 auto;">
        <div class="header">
            <img src="http://www.meska.hu/images/meska_logo1.png" class="logo">
            <h1><a target="_blank" href="https://www.meska.hu/MyFavouriteSellersProducts?code={{.User.Code}}">Kedvenc alkotóid legújabb termékei a Meskán</a></h1>
        </div>
        <div class="breaker thick green" style="width: 100%; height: 0px; border-color: #006600; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; border-width: 0.3vw;"> </div>

        <!-- CONTENT -->
        <div class="content">
            <div class="product-wrapper">
            <?php
            $count = 0;
            foreach($products as $p){ ?>
                    <div class="product-box" onclick="location.href='#';">

                        <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                            <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                        </a>

                        <div class="product-description">
                            <a href="https://<?=$p['shop_name']?>.meska.hu">
                                <div class="seller"><?=$p['shop_name']?></div>
                            </a>
                            <a href="https://www.meska.hu/t<?=$p['id']?>">
                                <div class="description"><?=$p['product_name']?></div>
                            </a>
                        </div>

                        <div class="product-price">
                            <div class="price"><?=$p['formatted_price']?></div>
                        </div>
                    </div>

                <?php
                $count++;
                if($count == 40){
                    break; //$count. loop után megáll
                }
            }
            ?>
            </div>
        </div>
        <!-- CONTENT END -->

        <div class="breaker" style="width: 100%; height: 0px; border-color: #dddddd; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; margin: 2% 0 2% 0;"> </div>
        <p class="huge center" style="text-align: center; color: #555555; margin-top:0.1em;">
            Reméljük, hogy minél hamarabb viszont látunk az oldalunkon!
        </p>
        <img src="http://www.meska.hu/images/meska_logo1.png" class="logo" style="width: 20%; margin: 2% auto 0 auto; display: block;">
        <p class="center" style="text-align: center; color: #555555; line-height: 1.5em; font-size: 1.3em;">
            <a href="https://www.facebook.com/meska.hu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-facebook-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
            <img src="http://www.meska.hu/images/email/meska-email-social-twitter-icon.png" class="picto mini" style="width: 4%; margin: 1%;">
            <a href="https://www.instagram.com/meska.hu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-instagram-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
            <a href="https://www.youtube.com/user/MeskaVideo" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-youtube-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
            <img src="http://www.meska.hu/images/email/meska-email-social-google-icon.png" class="picto mini" style="width: 4%; margin: 1%;">
            <a href="https://hu.pinterest.com/meskahu/" target="_blank"><img src="http://www.meska.hu/images/email/meska-email-social-pinterest-icon.png" class="picto mini" style="width: 4%; margin: 1%;"></a>
        </p>
    </div>

    <div class="container links" style="margin: 0 2% 0 2%; font-size: 1em; margin-top: 2%;">
        <a href="http://www.meska.hu/help" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">FAQ</a>
        <a href="http://www.meska.hu/Static/adatkezeles" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">Adatvédelmi szabályzat</a>
        <a href="http://www.meska.hu/Static/aff" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">Általános Felhasználási Feltételek</a>
        <a href="http://www.meska.hu/contact" style="text-decoration: none; cursor: pointer; color: #555555; display: inline-block; margin: 0 2% 0 0;">Kapcsolat</a>
    </div>

    <div class="grey-bg" style="background-color: #eeeeee;">
        <div class="breaker" style="width: 100%; height: 0px; border-color: #dddddd; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; margin: 2% 0 2% 0;"> </div>

        <div class="container footer" style="margin: 0 2% 0 2%; color: #888888; font-size: 0.75em; line-height: 1.5em;">
            <p style="text-align: center; color: #555555; line-height: 1.5em; font-size: 1.3em;">
                Ezt az e-mailt az {{.Email}} címre küldtük ki, mert a vásárlási folyamat félbeszakadt és erre figyelmeztetni szerettünk volna.
            </p>
            <p style="text-align: center; color: #555555; line-height: 1.5em; font-size: 1.3em;">
                2008-201y &copy; Meska.hu Kft - Minden jog fenntartva.
            </p>
        </div>
        <br><br>
    </div>

    <!-- Responsive Style -->
    <style scoped>
        .wrapper .content{
            padding: 5%;
        }
        .wrapper .content a{
            color: #88B04B;
            text-decoration: none;
        }
        .header{
            padding: 5px 100px;
            height: 80px;
            position: relative;
        }
        .header img{
            float: left;
        }
        .header h1{
            float: right;
            margin: 0;
            position: absolute;
            bottom: 0;
            right: 100px;
        }
        .header h1 a{
            width: 50%;
            color: #84b848;
            text-decoration: none;
        }
        .header:after {
            content: "";
            display: table;
            clear: both;
        }

        .center a{
            text-decoration: none;
        }
        .center a:hover{
            opacity: .7;
        }

        .product-wrapper{

        }

        .product-box{
            float: left;
            width: 16%;
            padding: 1%;
            margin: 1%;
            background-color: #F8F8F8;
        }
        .product-image{
            width: 100%;
        }
        .product-description .seller{
            font-size: 14px;
            color: #a0a0a0;
            font-family: 'Open Sans Condensed';
            text-transform: uppercase;
            margin: 5px 0 5px 0;
            overflow: hidden;
        }
        .product-description .description{
            font-size: 16px;
            color: #333;
            height: 45px;
            overflow: hidden;
            font-family: "Open Sans Condensed";
            text-transform: uppercase;
        }
        .product-price .price{
            font-family: "Amatica SC";
            font-size: 26px;
            letter-spacing: -2px;
            font-weight: 400;
        }
        .product-wrapper:after {
            content: "";
            display: table;
            clear: both;
        }
        @media (max-width: 424px){
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                width: 200px !important;
            }
            .wrapper .content{
                font-size: 12px;
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

            .header{
                padding: 0;
                text-align: center;
                height: 100px;
            }
            .header img{
                float: none;
            }
            .header h1{
                float: none;
                position: relative;
                right: 0;
                margin: 10px 0 0 0;
            }
            .header h1 a{
                font-size: 16px;
            }
            .product-box{
                width: 46%;
            }
        } /*XXS*/
        @media (min-width: 425px) and (max-width: 767px){
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                height: 50px;
            }
            .wrapper .content{
                font-size: 14px;
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
            .header{
                padding: 0;
                text-align: center;
                height: 105px;
            }
            .header img{
                float: none;
            }
            .header h1{
                float: none;
                position: relative;
                right: 0;
                margin: 10px 0 0 0;
            }
            .header h1 a{
                font-size: 20px;
            }
            .product-box{
                width: 29.33333%;
            }
        } /*XS*/
        @media (min-width: 768px) and (max-width: 1100px){
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                width: 300px !important;
            }
            .wrapper .content{
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
            .header{
                padding: 0;
                text-align: center;
                height: 120px;
            }
            .header img{
                float: none;
            }
            .header h1{
                float: none;
                position: relative;
                right: 0;
                margin: 10px 0 0 0;
            }
            .header h1 a{
                font-size: 26px;
            }
            .product-box{
                width: 21%;
            }
        } /*SM*/
        @media (min-width: 1101px) and (max-width: 1300px){
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                width: 300px !important;
            }
            .wrapper .content{
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
        } /*MD*/
    </style>

</body>
</html>