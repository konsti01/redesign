<?php include_once('_header.php'); ?>

<strong>Kedves <?= $recipient ?>!</strong><br>
<br>
<?php if ($sender == null) { ?>
    Belső üzeneted érkezett <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu"><?= App_Helper_Domain::hungarize($domain, true) ?>.hu</a> oldalán az alábbi felhasználótól: admin.<br>
<?php } else { ?>
    Belső üzeneted érkezett <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu"><?= App_Helper_Domain::hungarize($domain, true) ?>.hu</a> oldalán az alábbi felhasználótól: <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/UserProfil/index/<?= $sender_id ?>" style="color:#006600; font-weight:bold;"><?= $sender ?></a>.<br>
    <br>
    Kérjük, erre az üzenetre ne válaszolj, az üzenet küldőjének <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/Conversations/readMessage/<?= $message_id ?>" style="color:#006600; font-weight:bold;">ide kattintva válaszolhatsz</a>.<br>
<?php } ?>
<br>
Üdvözlettel,<br>
<br>
A Meska.hu csapata<br>
<br>
<br>
<?php if ($sender != null) { ?>
    <a href="<?=App_Controller::$_protocolStatic?>://www.<?= $domain ?>.hu/Conversations/readMessage/<?= $message_id ?>"
       style="background-color: #98BB34;
	   border: 1px solid #007000;
	   color: white;
	   cursor: pointer;
	   display: inline-block;
	   font-family: verdana;
	   font-size: 13px;
	   font-weight: bold;
	   text-decoration: none;
	   height: 24px;
	   line-height: 22px;
	   margin-right: 5px;
	   padding: 0 10px;">Válasz <?= $sender ?> üzenetére</a>
    <br>
    <br>
<?php } ?>
<div style="border: 2px solid #007000; padding:10px;">
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

<!-- Responsive Style -->
<style scoped>
    .wrapper .content{
        padding: 5%;
    }
    .wrapper .content a{
        color: #88B04B;
        text-decoration: none;
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
</style>

<?php include_once('_footer.php');