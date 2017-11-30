AUTOMATIKUS RENDSZERÜZENET. NE VÁLASZOLJ RÁ!

Kedves <?=$shop['shop_name']?>!

Gratulálunk!

A mai napon <?=App_Helper_Domain::hungarize($_domain, true, 'n')?> megvásárlásra kerültek az alábbi termékeid:
<?php 
$price = 0;
$postPrice = 0;
$olcsoposta = count($datas[$shop['shop_name']])>1?TRUE:FALSE;
foreach ($datas[$shop['shop_name']] as $data) { 
	if((int)$order['darab_'.$data['id']] < 1) {
		$order['darab_'.$data['id']] = 1;
	}

	if($order['darab_'.$data['id']] > 1) {
		$olcsoposta = true;
	}

$t = new ProductTransferMode();
$transfer = $t->getTransferModeById($order["transfer_mode_{$data['id']}"]);
 ?>

Termék neve:                      <?=$data['product_name']?>

Darabszám:                      <?=$order['darab_'.$data['id']]?>

<?php if ($data['db'] > 1){?>
A termékből már csak <?=$data['db']-$order['darab_'.$data['id']]?><?=$data['unit']?> elérhető. Ha szükséges, módosítsd a termékfeltöltésnél a megadott darabszámot!
<?php } ?>
Termék kódja:                     <?=$data['product_code']?>

Termék ára:                       <?=$data['price']*(int)$order['darab_'.$data['id']]?> Ft / <?=$order['darab_'.$data['id']]?> db
Opcionális postaköltség:          <?=($olcsoposta?$data['more_postage']:$data['postage'])*(int)$order['darab_'.$data['id']]?> Ft
Választott szállítási mód:        <?=$transfer['name']?>

<?php 
	$price = $price + ($data['price']*(int)$order['darab_'.$data['id']]);
	$postPrice += ($olcsoposta?$data['more_postage']:$data['postage'])*(int)$order['darab_'.$data['id']];
} 
?>

Összesen:                         <?=$price?> Ft
Opcionális postaköltség:          <?=$postPrice?> Ft

A gördülékeny kapcsolatfelvétel érdekében elküldjük számodra a vásárló adatait:

A vásárló felhasználóneve:        <?=$user['user_name']?>


A vásárló adatai:
Név:                              <?=$user['name']?>

E-mail címe:                      <?=$user['email']?>

Telefonszám(ai):                  <?=$user['phone_number']?> <?php if(!empty($user['phone_number2'])) echo ', '.$user['phone_number2']; ?>

Szállítási címe:                  <?=$user['zip_code']?> <?=$user['city']?> <?=$user['street']?> <?=$user['house_number']?>

<?php if ($order['basket_'.$shop['shop_name'].'_message'] != ''){?>
Üzenete: <?=$order['basket_'.$shop['shop_name'].'_message']?>


<?php } ?>

A tranzakció azonosítója:         <?=$identifier?>

Adatkezelés nyilvántartási száma: NAIH-55420/2012.


Kérjük az adásvétel lebonyolítása után ne felejtsd el értékelni a vásárlót!
Ezt a Fiókom/Értékelések menüpontjában, vagy a következő linkre kattintva teheted meg:

<?php foreach ($datas[$shop['shop_name']] as $data) { ?>
    <?=App_Controller::$_protocolStatic?>://www.<?=$data['domain']?>.hu/Feedback/writeFromShop/<?=$data['id']?>


<?php } ?>

A mindenki által olvasható visszajelzések mindannyiunk érdekét 
szolgálják, vevőként megbizonyosodhatunk róla, hogy a korábban vásárlók 
elégedettek voltak-e egy adott eladóval, épségben megkapták-e a 
kiválasztott árut, stb. míg készítőként megtudhatjuk, hogy egy vásárló 
probléma nélkül kifizette a korábban vásárolt portékákat.

Köszönjük, hogy igénybe vetted <?=App_Helper_Domain::hungarize($_domain, true)?> szolgáltatásait, további sikeres árusítást kívánunk!

Üdvözlettel, 

A Meska csapata
