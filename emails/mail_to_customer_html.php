<?php
$color = $_domain == 'meska' ? '006600' : '1e6875';
$separator = '<div style="height:1px; width: 100%; background-color: #'.$color.';margin: 10px 0 10px 0; line-height: 1px; font-size:1px; clear: both;">&nbsp;</div>';
$a_style = 'color: #'.$color.'; text-decoration: none;';
$table_style = 'font-size: 12px; border-spacing: 0; padding: 0; margin:0;';
$td_style = 'padding:0; margin:0; vertical-align: top; border-spacing: 0;';
?>

<strong>Kedves <?=$_user->name?> (<?=$_user->user_name?>)!</strong><br><br>
A mai napon <?=App_Helper_Domain::hungarize($_domain, true, 'n')?> az alábbi terméke(ke)t vásároltad meg:<br>

<?php foreach ($datas as $shop_name=>$products){ ?>
	<?php
	foreach ($products as $product) {
		$shop_user_id = $product['App_Database_Shops'][0]['user_id'];
		$shop_message = $product['App_Database_Shops'][0][$product['domain'].'_message_to_customer'];
		break;
	}
	
	$sumprice = 0;
	$sumpost = 0;
	?>
	<br><br>
	<strong><a style="<?=$a_style?>" href="<?=$_protocol?>://<?=$shop_name?>.meska.hu"><?=$shop_name?></a> eladótól</strong>
	
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
					Mennyiség: <?=$number?> <?=$product['unit'] != "" ? $product['unit'] : "db"?><br>
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
					 if($webox_shipping_prices[$shop_name] != null) {
						$post = $webox_shipping_prices[$shop_name];
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
		<?php if($_SESSION['transfer_mode_' . $shop_name] == "webox" || $_SESSION['transfer_mode_' . $shop_name] == "webox_utanvet") { ?>
		<tr>
			<td style="<?=$td_style?>" colspan="3">
				<?= App_Helper_Webox::find_machine_address($_SESSION['transfer_webox_machine_' . $shop_name], $ordered_webox_machines) ?>
			</td>
		</tr>
		<tr>
			<td style="<?=$td_style?>" colspan="3">
				<?= App_Helper_Webox::find_machine_location_description($_SESSION['transfer_webox_machine_' . $shop_name], $ordered_webox_machines) ?>
			</td>
		</tr>
		<?php } ?>
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
	 
	<!-- Uzenetek -->
	<?=$separator?>
	<strong>Üzeneted a bolt részére:</strong>
	<p style="text-align: justify;">
		<?=$order['basket_'.$shop_name."_message"] != "" ? $order['basket_'.$shop_name."_message"] : "-"?>
	</p>

	<?=$separator?>
	<strong>Üzenet <?=$shop_name?> bolttól:</strong>
	<p style="text-align: justify;">
		<?=$shop_message != "" ? $shop_message : "-"?>
	</p>
	
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

			if ($sumpay > $sumgcpay){
				//Ha meg kell fizetni 
				$remain = $sumpay - $sumgcpay; ?>
				<br><?=$shop_name?> alkotótól vásárolt termék(ek) árából és szállítási költségéből <strong><?=App_Helper_Format::productPrice($sumgcpay)?></strong> kiegyenlítésre került Ajándékkártyával. További fizetendőd: <strong><?=App_Helper_Format::productPrice($remain)?></strong> Ft. Kérjük vedd fel a kapcsolatot az eladóval a fizetés és szállítás részleteivel kapcsolatban!<br>
				<?php
			} else { ?>
				<br><?=$shop_name?> alkotótól vásárolt termék(ek) teljes ára és szállítási költsége <strong><?=App_Helper_Format::productPrice($sumgcpay)?></strong> értékben kiegyenlítésre került ajándékkártyával.<br>
				<?php
			}
		}
		?>
	<?php } ?>
	
	<!-- Elado adatai -->
	<?php
	$u = new Users();
	$user = $u->getUserByIdNative($shop_user_id);
	?>
	<?=$separator?>
	<table style="<?=$table_style?>">
		<tr>
			<td style="<?=$td_style?> width: 350px; text-align: left;<?= App_Helper_PostagePrice::is_address_needed_by_transfer_mode($_SESSION['transfer_mode_' . $shop_name]) ? ' border-right: 1px solid #' . $color . ';' : '' ?>">
				<strong>Eladó adatai:</strong><br><br>
				<img style="float:left; margin:0 10px 10px 0;" src="<?=$user['avatar'] != "" ? App_Controller::$_urlPrefixStatic.'/img/avatar/thumbnail/'.$user['avatar'] : App_Controller::$_urlPrefixStatic.'/images/no_avatar2.jpg'?>" alt="Avatar" title="avatar">
				Felhasználónév: <a href="<?=$_protocol?>://<?=$shop_name?>.meska.hu" style="<?=$a_style?>"><?=$user['user_name']?></a><br>
				Név: <?=$user['name']?><br>
				Email: <?=$user['email']?><br>
				Telefon: <?=$user['phone_number']?>
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
		
<?php } ?>

<br>
<strong>Köszönjük a vásárlást!</strong><br><br>
A Meska csapata
