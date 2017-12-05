<?php include_once('data.php'); ?>

<!DOCTYPE html>
<html style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; color: #555555; font-size: 1vw;">
<head>
    <title>Kedvenc alkotóid termékei a Meskán</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Responsive Style -->
    <style scoped>
        body{
            margin: 0px; padding: 0px;
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
        .wrapper .content{
            padding: 0;
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
        .center a{
            text-decoration: none;
        }
        .center a:hover{
            opacity: .7;
        }

        .heart{
            float: left;
            width: 13%;
            text-align: center;
        }
        .heart img{
            width: 70%;
        }
        .heading{
            float: left;
            width: 100%;
        }
        .subtext{
            padding: 20px;
        }
        .heading h1{
            margin-left: 100px;
        }
        .heading h1 a{
            color: #555;
            font-size: 1.5em;
            font-weight: 400;
        }
        .heading p{
            float: left;
            text-align: justify;
            width: 80%;
        }

        .product-box{
            padding: 20px;
            margin: 1% 0%;
            border-bottom: 1px solid #ccc;
        }
        .product-box:last-child{
            border-bottom: 0;
        }
        .seller-pic{
            float: left;
            width: 13%;
            text-align: center;
            margin: 0 0 0 0;
        }
        .seller-pic img{
            width: 70%;
            border: 1px solid #ccc;
            border-radius: 50%;
            overflow: hidden;
        }
        .products{
            float: left;
            width: 87%;
        }
        .product-box:after{
            content: "";
            display: table;
            clear: both;
        }
        .products .seller{
            width: 330px;
            text-align: center;
            font-size: 14px;
            line-height: 28px;
            color: #a0a0a0;
            font-family: 'Open Sans';
            font-weight: 200;
            text-transform: uppercase;
            letter-spacing: 1px;
            overflow: hidden;
            padding: 10px 0 5px 0;
            margin: 0 0 10px 0;
            background: url(https://assets.meska.hu/images/ribbon.png) top center no-repeat;
            background-size: 100% 100%;
        }
        .product-description{
            float: left;
            width: 18%;
            margin: 5px;
            padding: 10px;
            background-color: #f8f8f8;
            /*border: 1px solid #ccc;*/
            box-sizing: border-box;
        }
        .products:after{
            content: "";
            display: table;
            clear: both;
        }
        .product-image{
            width: 100%;
        }
        .shop-name{
            font-size: 10px;
            color: #a0a0a0;
            font-family: 'Open Sans';
            font-weight: 200;
            text-transform: uppercase;
            letter-spacing: 1px;
            overflow: hidden;
        }
        .product-description .description{
            font-size: 14px;
            color: #333;
            height: 39px;
            overflow: hidden;
            font-family: "Open Sans";
            text-transform: uppercase;
            margin: 0 0 10px 0;
        }
        .product-price .price{
            float: left;
            font-family: "Open Sans";
            font-size: 20px;
            font-weight: 200;
            margin: 10px 0 0 0;
        }
        .product-price .basket{
            float: right;
            background-color: #84b848;
            border-radius: 5px;
            margin: 8px 3px 3px 0;
        }
        .product-price .basket img{
            margin: 5px 5px 2px 5px;
        }
        .product-wrapper:after {
            content: "";
            display: table;
            clear: both;
        }
        .more-products{
            text-align: center;
            margin: 30px 0 20px 0;
            font-family: "Open Sans";
        }
        .more-products a{
            color: #84b848;
            border: 1px solid #84b848;
            padding: 10px 15px;
            border-radius: 6px;
            text-transform: uppercase;
        }
        .clear{
            clear: both;
        }
        @media (max-width: 424px){
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                width: 150px !important;
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

            .heart{
                width: 30px;
                height: 30px;
                border: 2px solid #ccc;
                padding: 10px;
                margin: 30px 10px 20px 10px;
            }
            .heart img{
                width: 30px;
                margin: 2px 0 0 0;
            }
            .heading{
                width: 75%;
            }
            .heading h1 a{
                font-size: .75em;
            }
            .heading p {
                width: 70%;
            }

            .seller-pic{
                float: none;
                width: 100%;
                margin: 0 0 10px 0;
            }
            .products{
                float: none;
                width: 100%;
            }
            .products .seller {
                background-size: 100% 100%;
            }
            .product-description{
                width: 48%;
                margin-bottom: 1.5%;
            }
            .product-price .price{
                font-size: 16px;
                margin: 13px 0 0 0;
            }
        } /*XXS*/
        @media (min-width: 425px) and (max-width: 767px){
            .wrapper{
                width: 100%;
            }
            .wrapper .logo{
                width: 250px;
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

            .heart{
                width: 30px;
                height: 30px;
                border: 2px solid #ccc;
                padding: 10px;
                margin: 30px 10px 20px 10px;
            }
            .heart img{
                width: 30px;
                margin: 2px 0 0 0;
            }
            .heading{
                width: 75%;
            }
            .heading h1 a{
                font-size: .75em;
            }
            .heading p {
                width: 78%;
            }

            .products .seller {
                background-size: 100% 100%;
            }

            .seller-pic{
                float: none;
                width: 100%;
                margin: 0 0 10px 0;
            }
            .seller-pic .seller{
                background-size: 75% 100%;
            }
            .products{
                float: none;
                width: 100%;
            }
            .product-description{
                width: 48%;
                margin-bottom: 1.5%;
            }
            .product-price .price{
                font-size: 16px;
                margin: 12px 0 0 0;
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
            .heart{
                margin: 20px 10px 20px 10px;
            }
            .header h1 a{
                font-size: 26px;
            }

            .heading{
                width: 75%;
            }
            .heading h1 a{
                font-size: 1em;
            }

            .seller-pic img {
                width: 100px;
                height: 100px;
            }

            .product-price .price{
                font-size: 16px;
                margin: 13px 0 0 0;
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

        /* BENEFITEK CSS */
        .benefits{
            margin: 0 0 20px 0;
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

    <!-- CONTENT -->
    <div class="content">
        <div class="heading">
            <?php $name = 'Címzett' ?>
            <h1><a target="_blank" href="https://www.meska.hu/MyFavouriteSellersProducts?code={{.User.Code}}">
                    Kedves <?echo $name?>, Kedvenc alkotóid legújabb termékei a Meskán
                </a>
            </h1>
            <div class="subtext">
                <div class="heart">
                    <img src="https://assets.meska.hu/images/meska-email-heart-icon.png">
                </div>
                <p>Összegyűjtöttük neked, hogy kedvencnek jelölt alkotóid milyen új termékeket töltöttek fel a Meskára. <br>
                    Reméljük ezek is tetszeni fognak :) <br>
                    Részletekért vagy vásárláshoz kattints a termékre!
                </p>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="product-wrapper">
            <?php
            $count = 0;
            foreach($products as $p){ ?>
                <div class="product-box" onclick="location.href='#';">

                    <div class="seller-pic">
                        <?php if ($p['avatar'] != '') { ?>
                            <a href="https://<?=$p['shop_name']?>.meska.hu">
                                <img src="https://www.meska.hu/img/avatar/large/<?=$p['avatar']?>">
                            </a>
                        <?php } else {?>
                            <a href="https://<?=$p['shop_name']?>.meska.hu">
                                <img src="https://www.meska.hu/images/no_avatar.jpg">
                            </a>
                        <?php } ?>
                    </div>

                    <div class="products">
                        <div class="seller"><?=$p['shop_name']?></div>
                        <div class="product-description">
                            <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                            </a>

                            <div class="shop-name"><?=$p['shop_name']?></div>

                            <a href="https://www.meska.hu/t<?=$p['id']?>">
                                <div class="description"><?=$p['product_name']?></div>
                            </a>

                            <div class="product-price">
                                <div class="price"><?=$p['formatted_price']?></div>
                                <a href="https://www.meska.hu/t<?=$p['id']?>">
                                    <div class="basket"><img src="http://assets.meska.hu/images/font-awesome_4-7-0_shopping-cart_20_0_ffffff_none.png"></div>
                                </a>
                            </div>
                        </div>
                        <div class="product-description">
                            <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                            </a>

                            <div class="shop-name"><?=$p['shop_name']?></div>

                            <a href="https://www.meska.hu/t<?=$p['id']?>">
                                <div class="description"><?=$p['product_name']?></div>
                            </a>

                            <div class="product-price">
                                <div class="price"><?=$p['formatted_price']?></div>
                                <a href="https://www.meska.hu/t<?=$p['id']?>">
                                    <div class="basket"><img src="http://assets.meska.hu/images/font-awesome_4-7-0_shopping-cart_20_0_ffffff_none.png"></div>
                                </a>
                            </div>
                        </div>
                        <div class="product-description">
                            <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                            </a>

                            <div class="shop-name"><?=$p['shop_name']?></div>

                            <a href="https://www.meska.hu/t<?=$p['id']?>">
                                <div class="description"><?=$p['product_name']?></div>
                            </a>

                            <div class="product-price">
                                <div class="price"><?=$p['formatted_price']?></div>
                                <a href="https://www.meska.hu/t<?=$p['id']?>">
                                    <div class="basket"><img src="http://assets.meska.hu/images/font-awesome_4-7-0_shopping-cart_20_0_ffffff_none.png"></div>
                                </a>
                            </div>
                        </div>
                        <div class="product-description">
                            <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                            </a>

                            <div class="shop-name"><?=$p['shop_name']?></div>

                            <a href="https://www.meska.hu/t<?=$p['id']?>">
                                <div class="description"><?=$p['product_name']?></div>
                            </a>

                            <div class="product-price">
                                <div class="price"><?=$p['formatted_price']?></div>
                                <a href="https://www.meska.hu/t<?=$p['id']?>">
                                    <div class="basket"><img src="http://assets.meska.hu/images/font-awesome_4-7-0_shopping-cart_20_0_ffffff_none.png"></div>
                                </a>
                            </div>
                        </div>
                        <div class="product-description">
                            <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                            </a>

                            <div class="shop-name"><?=$p['shop_name']?></div>

                            <a href="https://www.meska.hu/t<?=$p['id']?>">
                                <div class="description"><?=$p['product_name']?></div>
                            </a>

                            <div class="product-price">
                                <div class="price"><?=$p['formatted_price']?></div>
                                <a href="https://www.meska.hu/t<?=$p['id']?>">
                                    <div class="basket"><img src="http://assets.meska.hu/images/font-awesome_4-7-0_shopping-cart_20_0_ffffff_none.png"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>

                    <div class="more-products">
                        <a href="https://<?=$p['shop_name']?>.meska.hu"><?=$p['shop_name']?> összes terméke »</a>
                    </div>
                </div>

                <?php
                $count++;
                if($count == 5){
                    break; //$count. loop után megáll
                }
            }
            ?>
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
