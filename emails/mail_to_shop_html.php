<?php
$color = $_domain == 'meska' ? '006600' : '1e6875';
$separator = '<div style="height:1px; width: 100%; background-color: #'.$color.';margin: 10px 0 10px 0; line-height: 1px; font-size:1px; clear: both;">&nbsp;</div>';
$a_style = 'color: #'.$color.'; text-decoration: none;';
$table_style = 'font-size: 12px; border-spacing: 0; padding: 0; margin:0;';
$td_style = 'padding:0; margin:0; vertical-align: top; border-spacing: 0;';
?>

<strong>Kedves <?=$shop_name?>!</strong><br><br>
A mai napon <?=App_Helper_Domain::hungarize($_domain, true, 'n')?> megvásárlásra kerültek az alábbi termékeid:<br><br>

<!-- Termekek -->
	<?php
		$more_postage = count($products)>1?true:false;
		foreach ($products as $product){
			if ((int)$order['darab_'.$product['id']] > 1){
				$more_postage = true;
			}
		}
	?>
	<?php 
	$quantity_overwrite = $more_postage?$more_postage:(count($products) > 1);
	$maxpost = 0;
	foreach ($products as $product){ ?>
		<?=$separator?>

		<table style="<?=$table_style?>">
			<tr>
				<td rowspan="2" style="<?=$td_style?> width: 110px;">
					<a href="<?=App_Controller::$_urlPrefixStatic?>/ProductView/index/<?=$product['id']?>" style="display: block; margin:0 16px 0 0; padding:5px; border:1px solid #d4d9d1; height: 80px; width: 80px;">
						<img src="<?=$this->getImagePath(App_Controller::$_urlPrefixStatic.'/img/product/thumbnail/' . $product['App_Database_ProductImages'][0]['name'])?>" alt="<?=$product['product_name']?>" title="<?=$product['product_name']?>"
							 style="border: none; height: 80px; width: 80px;" >
					</a>
				</td>
				<td colspan="2" style="<?=$td_style?>">
					<a style="<?=$a_style?> font-weight: bold;" href="<?=App_Controller::$_urlPrefixStatic?>/ProductView/index/<?=$product['id']?>">
						<?=$product['product_name']?>
					</a><br><br>
				</td>
			</tr>
			<tr>
				<td style="<?=$td_style?> width: 250px;">
					<?php $number = ((int)$order['darab_'.$product['id']]) > 0 ? ((int)$order['darab_'.$product['id']]) : 1;?>
					Eladva: <?=$number?> <?=$product['unit'] != "" ? $product['unit'] : "db"?> (boltodban maradt: <?=(int)((int)$product['db']-(int)$number)?> <?=$product['unit'] != "" ? $product['unit'] : "db"?>)<br>
					Termék kódja: <?=$product['product_code']?><br>
					Termék ára: <?=App_Helper_Format::productPrice($product['price'])?> / <?=$product['unit'] != "" ? $product['unit'] : "db"?><br>
					<?php
					$sumprice += $number * $product['price'];
					?>
					Tranzakció azonosítója: <?=(int)$identifier?><br>
				</td>
				<?php 
				 if (App_Helper_PostagePrice::no_default_message('mail') == $_SESSION["transfer_name_{$product['id']}"]){
					 $post = 0;
				 } else {
					if ($webox_cod_postage_price != null) {
						$post = $webox_cod_postage_price;
					} else {
						$post = App_Helper_PostagePrice::getPrice($product['id'], $order['transfer_mode_'.$product['id']], $quantity_overwrite?2:$number);
					} ?>
				<?php }
					$maxpost = $post>$maxpost?$post:$maxpost;
				?>
			</tr>
		</table>
	<?php }
		$sumpost += $maxpost;
	?>

	<!-- Osszegzes -->
	<?=$separator?>
	<table style="<?=$table_style?>">
		<tr>
			<td style="<?=$td_style?> width: 150px;">
				<strong>Választott szállítási mód:</strong>
			</td>
			<td style="<?=$td_style?> width: 350px;">
				<?=$_SESSION["transfer_name_{$product['id']}"]?>
			</td>
			<td style="<?=$td_style?> text-align: right; width: 100px; font-weight: bold;">
				<?=App_Helper_Format::productPrice($sumpost)?><br>
			</td>
		</tr>
		<tr>
			<td style="<?=$td_style?> width: 150px;">
				<strong>Termékek ára összesen:</strong>
			</td>
			<td></td>
			<td style="<?=$td_style?> text-align: right; width: 100px; font-weight: bold;">
				<?=App_Helper_Format::productPrice($sumprice)?><br>
			</td>
		</tr>
		<tr>
			<td style="<?=$td_style?> width: 150px;">
				<strong>Mindösszesen:</strong>
			</td>
			<td></td>
			<td style="<?=$td_style?> text-align: right; width: 100px; font-weight: bold;">
				<?=App_Helper_Format::productPrice($sumprice+$sumpost)?><br>
			</td>
		</tr>
	</table>
	
	<?php if (is_array($_SESSION['giftcard'])){
		$gc = $_SESSION['giftcard'];
		if (in_array($product['shop_id'], $gc['shops'])){
			$sumpay = $sumprice + $sumpost;
			$sumgcpay = 0;
			$postcount = false;
			foreach ($gc['products'] as $p){
				if ($p['shop_id'] == $product['shop_id']){
					$sumgcpay += $p['payed'];
					if (!$postcount){
						$sumgcpay += $p['postage_payed'];
						$postcount = true;
					}
				}
			}
			
			
			$_SESSION['giftcard']['credit'][$product['shop_id']] = array('value'=>$sumgcpay, 'trid'=>(int)$identifier);

			if ($sumpay > $sumgcpay){
				//Ha meg kell fizetni 
				$remain = $sumpay - $sumgcpay; ?>
				<br><?=$_user->user_name?> vásárló a vásárolt termék(ek) árából és szállítási költségéből <strong><?=App_Helper_Format::productPrice($sumgcpay)?></strong>-ot Ajándékkártyával fizetett ki. Ezt az összeget a Meska néhány napon belül átutalja Részedre. További fizetendő: <strong><?=App_Helper_Format::productPrice($remain)?></strong>. Kérjük vedd fel a kapcsolatot a vásárlóval a fennmaradó összeg kifizetése és a szállítás részleteinek megbeszélése miatt.<br><br>
				<?php
			} else { ?>
				<br><?=$_user->user_name?> vásárló a vásárolt termék(ek) árát és szállítási költségét, azaz összesen <strong><?=App_Helper_Format::productPrice($sumgcpay)?></strong>-ot, Ajándékkártyával fizetett ki. Ezt az összeget a Meska néhány napon belül átutalja Részedre. Kérjük gondoskodj a termék mielőbbi szállításáról!
				<?php
			}
		}
		?>
	<?php } ?>
	
	<!-- Uzenetek -->
	<?=$separator?>
	<strong>Üzenet a vásárlótól:</strong>
	<p style="text-align: justify;">
		<?=$order['basket_'.$shop_name."_message"] != "" ? $order['basket_'.$shop_name."_message"] : "-"?>
	</p>

	<?=$separator?>
	<strong>Üzeneted a vásárló részére:</strong> <span style="font-size: 10px">(Fiókom/Boltom beállításai menüben módosítható)</span>
	<p style="text-align: justify;">
		<?=$shop_message != "" ? $shop_message : "-"?>
	</p>
	
	<!-- Vasarol adatai -->
	<?=$separator?>
	<table style="<?=$table_style?>">
		<tr>
			<td style="<?=$td_style?> width: 350px; text-align: left; <?= App_Helper_PostagePrice::is_address_needed_by_transfer_mode($_SESSION['transfer_mode_' . $shop_name]) ? ' border-right: 1px solid #' . $color . ';' : '' ?>">
				<strong>Vásárló adatai:</strong><br><br>
				<img style="float:left; margin:0 10px 10px 0;" src="<?=$_user->avatar != "" ? App_Controller::$_urlPrefixStatic.'/img/avatar/thumbnail/'.$_user->avatar : App_Controller::$_urlPrefixStatic.'/images/no_avatar2.jpg'?>" alt="Avatar" title="avatar">
				Felhasználónév: <a href="<?=$_protocol?>://<?=$_user->user_name?>.meska.hu" style="<?=$a_style?>"><?=$_user->user_name?></a><br>
				Név: <?=$_user->name?><br>
				Email: <a style="<?=$a_style?>" href="mailto:<?=$_user->email?>"><?=$_user->email?></a><br>
				Telefon: <?=$_user->phone_number?>
			</td>
			<?php if (App_Helper_PostagePrice::is_address_needed_by_transfer_mode($_SESSION['transfer_mode_' . $shop_name])) { ?>
			<td style="<?=$td_style?> text-align: left; padding-left:10px;">
				<strong>Szállítási cím:</strong><br><br>
				<?=$_user->name?><br>
				<?=$_user->zip_code?>, <?=$_user->city?><br>
				<?=$_user->street?> <?=$_user->house_number?>.<br>
				<?=$_user->city?>
			</td>
			<?php } ?>
		</tr>
	</table>
	<?=$separator?>

<br>
<strong>További sikeres meskázást!</strong><br><br>
A Meska csapata
