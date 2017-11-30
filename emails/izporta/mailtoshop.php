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

	$postagePricesModel = new PostagePrices();
	$postagePrices = $postagePricesModel->get($data['id']);
	$dbsess = new DbSess();
	$quantity = $order['darab_'.$data['id']]>1?'more':'one';
?>

Termék neve:                    <?=$data['product_name']?>

Mennyiség:                      <?=$order['darab_'.$data['id']]?> <?=$data['unit']?>

<?php if ($data['db'] > 1){?>
A termékből már csak <?=$data['db']-$order['darab_'.$data['id']]?> <?=$data['unit']?> elérhető. Ha szükséges, módosítsd a termékfeltöltésnél a megadott darabszámot!
<?php } ?>
Termék kódja:                     <?=$data['product_code']?>

Termék ára:                       <?=App_Helper_Format::productPrice($data['price']*(int)$order['darab_'.$data['id']])?> / <?=$order['darab_'.$data['id']]?> <?=$data['unit']?> (<?=Unit::unit_price_text($data['price'], $data['pack_quantity'], $data['unit'])?>)

Opcionális postaköltség:          <?=App_Helper_Format::productPrice($postagePrices[$order["transfer_mode_{$data['id']}"]][$quantity])?>

Választott szállítási mód:        <?=App_Helper_PostagePrice::hungarize($order["transfer_mode_{$data['id']}"])?>

<?php 
	$price = $price + ($data['price']*(int)$order['darab_'.$data['id']]);
	$postPrice += $postagePrices[$order["transfer_mode_{$data['id']}"]][$quantity];
} 
?>

Összesen:                         <?=App_Helper_Format::productPrice($price)?>

Opcionális postaköltség:          <?=App_Helper_Format::productPrice($postPrice)?>


A gördülékeny kapcsolatfelvétel érdekében elküldjük számodra a vásárló adatait:

A vásárló felhasználóneve:        <?=$user['user_name']?>


A vásárló adatai:
Név:                              <?=$user['name']?>

E-mail címe:                      <?=$user['email']?>

Telefonszáma(i):                  <?=$user['phone_number']?> <?php if(!empty($user['phone_number2'])) echo ', '.$user['phone_number2']; ?>

Szállítási címe:                  <?=$user['zip_code']?> <?=$user['city']?> <?=$user['street']?> <?=$user['house_number']?>

				
A tranzakció azonosítója:         <?=$identifier?>


Kérjük az adásvétel lebonyolítása után ne felejtsd el értékelni a vásárlót!
Ezt a Fiókom/Értékelések menüpontjában, vagy a következő linkre kattintva teheted meg:

<?php foreach ($datas[$shop['shop_name']] as $data) { ?>
    <?=$_protocol?>://www.<?=$data['domain']?>.hu/Feedback/writeFromShop/<?=$data['id']?>


<?php } ?>

A mindenki által olvasható visszajelzések mindannyiunk érdekét 
szolgálják, vevőként megbizonyosodhatunk róla, hogy a korábban vásárlók 
elégedettek voltak-e egy adott eladóval, épségben megkapták-e a 
kiválasztott árut, stb. míg készítőként megtudhatjuk, hogy egy vásárló 
probléma nélkül kifizette a korábban vásárolt portékákat.

Köszönjük, hogy igénybe vetted <?=App_Helper_Domain::hungarize($_domain, true)?> szolgáltatásait, további sikeres árusítást kívánunk!

Üdvözlettel, 

A Meska csapata
