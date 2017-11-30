AUTOMATIKUS RENDSZERÜZENET. NE VÁLASZOLJ RÁ!

Kedves <?=$user?>!

Gratulálunk!
<?php 
$price = 0; 
$postPrice = 0; 
foreach ($datas as $shop=>$details) { 
?> 
A mai napon <?=App_Helper_Domain::hungarize($_domain, true, 'n')?> <?=$shop?> <?=$_domain=="meska"?"készítőtől":"eladótól"?> az alábbi termékeket vásároltad meg:
<?php 
$productPrice = 0;
$productPostPrice = 0;
$akciosposta = count($details)>1?TRUE:FALSE;
foreach ($details as $data) {
	if((int)$order['darab_'.$data['id']] < 1) {
		$order['darab_'.$data['id']] = 1;
	}
	
	if($order['darab_'.$data['id']] > 1) {
		$akciosposta = true;
	}

	$postagePricesModel = new PostagePrices();
	$postagePrices = $postagePricesModel->get($data['id']);
	$dbsess = new DbSess();
	$quantity = $order['darab_'.$data['id']]>1?'more':'one';
?>

Termék neve:                      <?=$data['product_name']?>

Mennyiség:                      <?=$order['darab_'.$data['id']]?> <?=$data['unit']?>

Termék kódja:                     <?=$data['product_code']?>

Termék ára:                       <?=$data['price']*(int)$order['darab_'.$data['id']]?> Ft / <?=$order['darab_'.$data['id']]?> <?=$data['unit']?> (<?=Unit::unit_price_text($data['price'], $data['pack_quantity'], $data['unit'])?>)

Opcionális postaköltség:          <?=App_Helper_Format::productPrice($postagePrices[$order["transfer_mode_{$data['id']}"]][$quantity])?>

Választott szállítási mód:        <?=App_Helper_PostagePrice::hungarize($order["transfer_mode_{$data['id']}"])?>


<?php 
	$productPrice = $productPrice + ($data['price']*(int)$order['darab_'.$data['id']]);
	$productPostPrice = $postagePrices[$order["transfer_mode_{$data['id']}"]][$quantity];
} ?>
Összesen:						  <?=App_Helper_Format::productPrice($productPrice)?>

Opcionális postaköltség:          <?=App_Helper_Format::productPrice($productPostPrice)?>


A gördülékeny kapcsolatfelvétel érdekében elküldjük számodra a <?=$_domain=="meska"?"készítő":"eladó"?> adatait:
<?php 
$u = new Users();
$tempuid = $data['App_Database_Shops']['user_id'] > 0 ? $data['App_Database_Shops']['user_id'] : $data['App_Database_Shops'][0]['user_id'];
$user = $u->getUserById($tempuid);
 ?>

A <?=$_domain=="meska"?"készítő":"eladó"?> felhasználóneve:        <?=$_protocol?>://<?=$user['user_name']?>.meska.hu
<?=$_domain=="meska"?"Készítő":"Eladó"?> adatai:
Neve:                             <?=$user['name']?>

E-mail címe:                      <?=$user['email']?>

Telefonszáma(i):                  <?=$user['phone_number']?> <?php if(!empty($user['phone_number2'])) echo ', '.$user['phone_number2']; ?>

A tranzakció azonosítója:         <?=$identifier?>

<?php 
	$price = $productPrice + $price;
	$postPrice = $productPostPrice + $postPrice;
} 
?>

Mindösszesen:                     <?=$price?> FT
Opcionális postaköltség:          <?=$postPrice?> Ft

Kérjük az áru kézhezvétele után ne felejtsd el értékelni a <?=$_domain=="meska"?"készítőt":"eladót"?>!
Ezt a  Fiókom/Értékelések menüpontjában, vagy a következő linkre kattintva teheted meg:

<?php foreach ($datas as $details) { 
	foreach ($details as $data) { ?>
        <?=$_protocol?>://www.<?=$data['domain']?>.hu/Feedback/writeFromCustomer/<?=$data['id']?>

		
<?php }
 } ?>
 

A mindenki által olvasható visszajelzések mindannyiunk érdekét 
szolgálják, vevőként megbizonyosodhatunk róla, hogy a korábban vásárlók 
elégedettek voltak-e egy adott eladóval, épségben megkapták-e a 
kiválasztott árut, stb. míg készítőként megtudhatjuk, hogy egy vásárló 
probléma nélkül kifizette a korábban vásárolt portékákat.

Köszönjük, hogy igénybe vetted <?=App_Helper_Domain::hungarize($_domain, true)?> szolgáltatásait!

Üdvözlettel, 

A Meska csapata

