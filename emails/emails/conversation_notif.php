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
	<?php /*<a href="<?=App_Controller::$_urlPrefixStatic?>/nagykaracsony?utm_source=belso_uzenet&utm_medium=mindenki&utm_campaign=nagykaracsony-2016"><img style="width: 100%;" src="<?=App_Controller::$_urlPrefixStatic?>/images/prom/Meska-2016-blackfriday-level-550x55.png"></a><br>*/?>
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
		$p = new Products();
		$product_name = $p->getProductNameById($pid);
		?>
		<br><br>
		Üzenetküldést az alábbi termék oldaláról kezdeményezték: <a href="<?=App_Controller::$_urlPrefixStatic?>/ProductView/index/<?= $pid ?>"><?= $product_name ?></a>
	<?php } ?>

</div>
