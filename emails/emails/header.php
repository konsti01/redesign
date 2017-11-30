<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?= $subject ?></title>
	</head>
	<div style="width: 645px; margin:0 auto 0 auto; background-color: <?= $bgcolor ?>; padding:5px 10px 10px 10px; font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
		<div style="padding:15px;background-color: #FFFFFF;border-radius: 5px;">
			<!-- Header -->
			<a href="<?=App_Controller::$_urlPrefixStatic?>" style="text-decoration: none;display: block;height: 47px;">
				<div style="background-image: url('<?=App_Controller::$_urlPrefixStatic?>/newsletter/logo_162.jpg'); width: 162px; height:62px;float:left;margin-right: 10px;"></div>
				<span style="color: #006600;font-weight: bold;font-size: 40px;"><?= App_Helper_Domain::hungarize($domain) ?></span><br/>
				<span style="color: #888888;font-style: italic;font-size: 13px;">
					<?= $slogan ?>
				</span>
			</a>
			<br style="clear: both;"/><br><br>