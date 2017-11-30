<a style="display:block;font-size: 20px;font-weight: bold;padding:3px;color: #006600;background-color: #F5F5F5;border-radius: 5px;border-right: 2px solid #E0EFCA;border-bottom: 2px solid #E0EFCA; margin:0 0 10px 0;text-decoration:none;" target="_blank" href="<?=App_Controller::$_urlPrefixStatic?>/MyFavouriteSellersProducts?code=<?= $code ?>">Kedvenc alkotóid legújabb termékei a Meskán</a>

<?php foreach ($products as $key => $product) { ?>
	<?php
	$product_link = App_Controller::$_urlPrefixStatic."/Link?id=".$send_id."&pid=" . $product['id'];
	$image_src = $this->getImagePath(App_Controller::$_urlPrefixStatic.'/img/product/thumbnail/' . $product['image']);
	$shop_link = App_Controller::$_urlPrefixStatic."/Link?id=".$send_id."&sid=" . $product['shop_id'];
	?>
	<div style="border: 1px solid #d4d9d1;width: 125px;float:left;margin-right: <?= ($key + 1) % 4 == 0 ? 0 : 25 ?>px;padding: 4px;margin-bottom: 10px;background-color: #fff;">
		<a href="<?= $product_link ?>">
			<img style="color:#000;font-size: 11px;display: inline-block;border: none;" src="<?= $image_src ?>" alt="<?= $product['image_alt'] ?>" title="<?= $product['image_title'] ?>"/>
		</a>
		<div style="float:left; width:120px; overflow: hidden; text-overflow: ellipsis;">
			<a style="color:#000;font-size: 11px;text-decoration: none;" href="<?= $product_link ?>">
				<?= App_Helper_Format::cut($product['product_name'], 15, '...') ?>
			</a>
		</div>
		<div style="float:left; width: 75px; overflow: hidden; text-overflow: ellipsis;">
			<a style="color:#a2aca6;font-size: 11px;text-decoration: none;" href="<?= $shop_link ?>">
				<?= $product['shop_name'] ?>
			</a>
		</div>
		<div style="float:right; font-size: 11px; width: 50px; overflow: hidden; text-align: right;">
			<?= str_replace(' ', '&nbsp;', App_Helper_Format::productPrice($product['price'])) ?>
		</div>
	</div>
<?php } ?>

<br style="clear: both;"/>
<a href="<?=App_Controller::$_urlPrefixStatic?>/MyFavouriteSellersProducts?code=<?= $user['code'] ?>" style="display:block; width: 350px; margin: 20px auto 10px auto; font-size:15px; font-weight:bold; text-align: center; padding: 10px; text-decoration: none; text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2); color: #ffffff; border: 1px solid #007000; background-color: #98BB34;">További termékek kedvenc eladóidtól</a>
