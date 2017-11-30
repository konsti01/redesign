Kedves <?=$user['user_name']?>!

Üdvözlünk a Meskarácsony angyalai között!


<?php
$price = 0;
$postPrice = 0;
foreach ($datas as $shop=>$details) {
	$productPrice = 0;
	$productPostPrice = 0;
	$akciosposta = count($details)>1?TRUE:FALSE;
	foreach ($details as $data) {
		if ($data['meskaracsony'] != 1){
			continue;
		}
		if((int)$order['darab_'.$data['id']] < 1) {
			$order['darab_'.$data['id']] = 1;
		}
		if($order['darab_'.$data['id']] > 1) {
			$akciosposta = true;
		}
		$t = new ProductTransferMode();
		$transfer = $t->getTransferModeById($order["transfer_mode_{$data['id']}"]);?>
		A mai napon sikeresen megvásároltad <?=$shop?> készítő <?=$data['product_name']?> termékét.

		<?php
		$productPrice = $productPrice + ($data['price']*(int)$order['darab_'.$data['id']]);
		$productPostPrice = $productPostPrice + ($akciosposta?$data['more_postage']:$data['postage'])*(int)$order['darab_'.$data['id']];
	}
	$price = $productPrice + $price;
	$postPrice = $productPostPrice + $postPrice;
}
?>
		
A termék vételárának teljes összegével a Remény a Leukémiás Gyermekekért Közhasznú Alapítványt támogatod.

Kérjük, hogy a termék vételárát az akció keretében létrehozott bankszámlaszámra utald el. A terméket a vételár beérkezését követően hamarosan postázzuk megadott címedre.

Átutalás adatai:

Kedvezményezett neve: Meska.hu Kft
Bankszámlaszám: 10100826-09987600-01003003
Átutalás összege (termék ára+postaköltsége): <?=($price+$postPrice)?> Ft
Közlemény rovatba írandó szöveg: <?=$user['user_name']?>


A tranzakcióval kapcsolatban a vételár átutalásán kívül egyéb teendőd nincs. Kérjük, hogy a Meska láblécében található Kapcsolat menüponton keresztül csak abban az esetben vedd fel velünk a kapcsolatot, ha a tranzakcióval kapcsolatban probléma merülne fel. A vételár beérkezését követően a terméket automatikusan postázzuk Részedre.

Köszönjük, hogy Meskarácsonyra felajánlott terméket választottál és így vásárlásoddal a Remény a Leukémiás Gyermekekért Közhasznú Alapítványt támogatod!

Üdvözlettel

A Meska csapata