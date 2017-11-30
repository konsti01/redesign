Kedves <?=$user['name']?>!

Köszönjük, hogy vásárlásoddal támogattad a Meskarácsony ügyét! Idei jótékonysági akciónkkal a nágocsi Reménység Gyermekesély és Rehabilitációs Alapítvány (www.remenyseg.hu) és védencei (nehéz sorsú gyermekek és fiatalok, rászoruló családok, valamint idősek) karácsonyát szeretnénk szebbé tenni. 

A táskák készítési és postázási költségeit a Meska.hu Kft. vállalta magára, így a termék megvásárlásából befolyt teljes Általad átutalt összeget pénzadományként juttatjuk el az Alapítvány részére. 

Kérjük, hogy a vásárolt táska árát a jótékonysági akció céljára létrehozott elkülönített bankszámlára utald.

Az átutalás adatai:
<?php
$price = 0;
foreach ($datas as $shop=>$details) {
	if ($shop == "Meskaracsony"){
	$productPrice = 0;
	foreach ($details as $data) {
		
		if((int)$order['darab_'.$data['id']] < 1) {
			$order['darab_'.$data['id']] = 1;
		}		
		$productPrice = $productPrice + ($data['price']*(int)$order['darab_'.$data['id']]);
	}
	$price = $productPrice + $price;
	}
}
?>

Kedvezményezett neve: Meska.hu Kft.
Bankszámlaszám: 10100826-09987600-02003006
Utalandó összeg: <?=$price?> Ft
Közlemény rovatba írandó szöveg: <?=$user['user_name']?>

Figyelem! Ha az átutalás közlemény rovatában felhasználónevedet nem, vagy rosszul adod meg, átutalásodat nem tudjuk beazonosítani!

A termék árának beérkezésétől számított 10 napon belül postázzuk a regisztrációkor megadott címre egyedi, divatos Meskatáskádat, melynek megvásárlásával hozzájárultál ahhoz, hogy a rászorulóknak idén kicsit több jusson az ünnepek melegéből!

Köszönjük vásárlásod, meghitt ünnepi készülődést kívánunk!

A Meska csapata