<?php

session_start();

if(isset($_SESSION['username'])){
include_once('data.php');
?>

<!DOCTYPE html>
<html style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; color: #555555; font-size: 1vw;">
<head>
    <title>Kedvenc alkotóid termékei a Meskán</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Responsive Style -->
    <style scoped>
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
            width: 266px;
            margin: 2% 0;
        }
        .center a{
            text-decoration: none;
        }
        .center a:hover{
            opacity: .7;
        }

        .heart{
            float: left;
            width: 50px;
            height: 50px;
            border: 3px solid #ccc;
            padding: 20px;
            border-radius: 50%;
            margin: 40px 20px 20px 20px;
        }
        .heart img{
            margin: 5px 0 0 0;
        }
        .heading{
            float: left;
            width: 85%;
        }
        .heading h1 a{
            color: #555;
            font-size: 1.5em;
            font-weight: 400;
        }
        .heading p{
            text-align: justify;
        }

        .product-box{
            width: 98%;
            padding: 1%;
            margin: 1% 0%;
            border-bottom: 1px solid #ccc;
        }
        .product-box:last-child{
            border-bottom: 0;
        }
        .seller-pic{
            float: left;
            width: 15%;
            text-align: center;
            margin: 10% 0 0 0;
        }
        .seller-pic img{
            width: 150px;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 50%;
            overflow: hidden;
        }
        .products{
            float: left;
            width: 85%;
        }
        .product-box:after{
            content: "";
            display: table;
            clear: both;
        }
        .products .seller{
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
            background-size: 40% 100%;
        }
        .product-description{
            float: left;
            width: 19%;
            margin: 0 .5%;
            padding: .5%;
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
            font-size: 14px;
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
            font-size: 24px;
            font-weight: 200;
        }
        .product-price .basket{
            float: right;
            background-color: #84b848;
            border-radius: 5px;
            margin: 0 3px 3px 0;
        }
        .product-price .basket img{
            margin: 10px 10px 5px 10px;
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
            color: #fff;
            background-color: #84b848;
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
                border: 2px solid #666;
                padding: 10px;
                margin: 80px 10px 20px 10px;
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
                border: 2px solid #666;
                padding: 10px;
                margin: 70px 10px 20px 10px;
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

        @media (max-width: 424px){
            .wrapper .container{
                font-size: 12px !important;
            }
            .wrapper .container h1{
                font-size: 24px !important;
            }
            .wrapper .container .picto-container img{
                width: 50px !important;
            }
        } /*XXS*/
        @media (min-width: 425px) and (max-width: 767px){
            .wrapper .container{
                font-size: 14px !important;
            }
            .wrapper .container h1{
                font-size: 32px !important;
            }
            .wrapper .container .picto-container img{
                width: 50px !important;
            }
        } /*XS*/
        @media (min-width: 768px) and (max-width: 1100px){
            .wrapper .container{
                font-size: 16px !important;
            }
            .wrapper .container h1{
                font-size: 48px !important;
            }
            .wrapper .container .picto-container img{
                width: 80px !important;
            }
        } /*SM*/
        @media (min-width: 1101px) and (max-width: 1300px){
            .wrapper .container{
                font-size: 16px !important;
            }
            .wrapper .container .picto-container img{
                width: 80% !important;
            }
        } /*MD*/
    </style>
</head>
<body style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; color: #555555; font-size: 1em; margin-top: 0.5%;">
<div class="wrapper" style="background-color: #ffffff; border: 1px solid #dddddd; border-radius: 0.5vw; width: 99%; margin: 0 auto 0 auto;">
    <div class="header">
        <img src="http://assets.meska.hu/images/logo/logo.png" class="logo">
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="heart">
            <img src="http://assets.meska.hu/images/font-awesome_4-7-0_heart-o_50_0_cccccc_none.png">
        </div>
        <div class="heading">
            <?php $name = 'Címzett' ?>
            <h1><a target="_blank" href="https://www.meska.hu/MyFavouriteSellersProducts?code={{.User.Code}}">
                    Kedves <?echo $name?>, Kedvenc alkotóid legújabb termékei a Meskán
                </a>
            </h1>
            <p>Összegyűjtöttük neked, hogy kedvencnek jelölt alkotóid milyen új termékeket töltöttek fel a Meskára. <br>
                Reméljük ezek is tetszeni fognak :) <br>
                Részletekért vagy vásárláshoz kattints a termékre!</p>
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
    <!-- CONTENT END -->

    <div class="container" style="margin: 0 2% 0 2%;">
        <table style="width: 100%; border-spacing: 0; border-collapse: collapse; color: #555555;">
            <tr>
                <td class="picto-container" style="width: 13%; vertical-align: top; text-align: center;">
                    <img src="http://www.meska.hu/images/email/meska-email-lock-icon.png" class="picto" style="width: 70%;">
                </td>
                <td>
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0; margin-bottom: 20px;">Biztonságos tranzakciók</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">A Meska.hu oldalait biztonságos (SSL / https) kapcsolaton keresztül böngészed » erre utal a böngésző címsorában megjelenő kis zöld lakat is. Vásárlási adataidat 3. fél nem láthatja, nálunk biztonságban vagy!</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="breaker" style="width: 100%; height: 0px; border-color: #dddddd; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; margin: 2% 0 2% 0;"> </div>

    <div class="container" style="margin: 0 2% 0 2%;">
        <table style="width: 100%; border-spacing: 0; border-collapse: collapse; color: #555555;">
            <tr>
                <td class="picto-container" style="width: 13%; vertical-align: top; text-align: center;">
                    <img src="http://www.meska.hu/images/email/meska-email-shield-icon.png" class="picto" style="width: 70%;">
                </td>
                <td>
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0;  margin-bottom: 20px;">Meska garancia</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">Amennyiben bankkártyával egyenlíted ki vásárlásod ellenértékét, az átutalt összeg a postázás után 8 nappal kerül az eladó számlájára, így addig jelezheted nekünk, ha a termék valamilyen okból nem felel meg a leírtaknak; a pénzed és a vásárlásod ez időszak alatt extra biztonságban van, garantáljuk. </p>
                </td>
            </tr>
        </table>
    </div>

    <div class="breaker" style="width: 100%; height: 0px; border-color: #dddddd; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; margin: 2% 0 2% 0;"> </div>

    <div class="container" style="margin: 0 2% 0 2%;">
        <table style="width: 100%; border-spacing: 0; border-collapse: collapse; color: #555555;">
            <tr>
                <td class="picto-container" style="width: 13%; vertical-align: top; text-align: center;">
                    <img src="http://www.meska.hu/images/email/meska-email-oneclick-icon.png" class="picto" style="width: 70%;">
                </td>
                <td>
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0;  margin-bottom: 20px;">Belépés egy kattintással</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">
                        Amennyiben összekötöd Facebook fiókodat Meska fiókoddal (Fiókom / Alapadatok / Adatmódosítás » <a href="https://www.meska.hu/ModAcc" style="color: #84b848; text-decoration: none">https://www.meska.hu/ModAcc</a>) egyetlen kattintással be tudsz lépni Meska fiókodba. Ennek számos előnye van:
                    <ul>
                        <li>Belépésnél nem kell beírni az e-mail címet és a jelszót</li>
                        <li>Elég a Facebook jelszavadat megjegyezni (sőt, ha be vagy lépve, akkor ez sem kell és tényleg csak egy kattintás)</li>
                        <li>Különböző mobileszközön is egyszerűbb a belépés, hiszen nem kell hosszú karaktersorokat bepötyögni a telefonodon, tableteden.</li>
                    </ul>
                    </p>
                </td>
            </tr>
        </table>
    </div>

    <div class="breaker" style="width: 100%; height: 0px; border-color: #dddddd; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; margin: 2% 0 2% 0;"> </div>

    <div class="container" style="margin: 0 2% 0 2%;">
        <table style="width: 100%; border-spacing: 0; border-collapse: collapse; color: #555555;">
            <tr>
                <td class="picto-container" style="width: 13%; vertical-align: top; text-align: center;">
                    <img src="http://www.meska.hu/images/email/meska-email-card-icon.png" class="picto" style="width: 70%;">
                </td>
                <td>
                    <h2 class="no-top-margin" style="font-weight: normal; font-size: 2em; color: #555555; margin-top: 0;  margin-bottom: 20px;">Fizetés gyorsan, kényelmesen, bankkártyával</h2>
                    <p style="text-align: justify; color: #555555; margin-top:0.1em;">
                        Egyre több eladó boltjában lehet bankkártyával fizetni a Meskán is! Nem kell a termék átvételekor a pénzzel foglalkozni, plusz bankkártyás fizetés esetén a Meska garanciát vállal arra, hogy nem lesz probléma a vásárlással (részleteket lásd a következő pontban).
                    </p>
                </td>
            </tr>
        </table>
    </div>

    <div class="breaker" style="width: 100%; height: 0px; border-color: #dddddd; border-style: solid; border-top-width: 1px; border-left: none; border-right: none; border-bottom: none; margin: 2% 0 2% 0;"> </div>

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
</div>

<div class="container links" style="margin: 0 2% 0 2%; font-size: 1em; margin-top: 2%;">
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
</body>
</html><?php
}
else{
    echo 'Nem vagy bejelentkezve!';
}
