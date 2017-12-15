<?php include_once('../header.php'); ?>
<?php include_once('data.php'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="/assets/css/topnav.css">
<link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
<link rel="stylesheet" type="text/css" href="basket.css">
<link rel="stylesheet" type="text/css" href="basket_responsive.css">

<div class="row">
    <div class="col-12 content">
        <div class="wrapper row">
            <div class="titles col-6">
                <div class="content">
                    <div class="seller">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample0" aria-expanded="false" aria-controls="multiCollapseExample0">
                            <div class="logo">
                                <img src="https://www.meska.hu/img/shop_logo/normal/Zyphia_meska_shop_logo_194935.jpg">
                            </div>
                            <div class="avatar">
                                <img src="https://www.meska.hu/img/avatar/thumbnail/<?=$p['avatar']?>">
                            </div>
                            <div class="sum_price">
                                Összesen: <?php echo $sum_price; ?> Ft
                            </div>
                            <div class="clear"></div>
                        </button>
                        <div class="collapse multi-collapse" id="multiCollapseExample0">
                            <div class="card card-body">
                                <?php $sum_price = 0; ?>
                                <div class="product">
                                    <div class="name"><?=$p['product_name']?></div>
                                    <div class="price"><?=$p['price']?> Ft</div>
                                    <?php $sum_price = $sum_price + $p['price']; ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="product">
                                    <div class="name"><?=$p['product_name']?></div>
                                    <div class="price"><?=$p['price']?> Ft</div>
                                    <?php $sum_price = $sum_price + $p['price']; ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="product">
                                    <div class="name"><?=$p['product_name']?></div>
                                    <div class="price"><?=$p['price']?> Ft</div>
                                    <?php $sum_price = $sum_price + $p['price']; ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="sum_price">
                                    Összesen: <?php echo $sum_price; ?> Ft
                                </div>
                            </div>
                        </div>
                    </div> <!--invisible -->
                    <div class="seller">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                            <div class="logo">
                                <img src="https://www.meska.hu/img/shop_logo/normal/Zyphia_meska_shop_logo_194935.jpg">
                            </div>
                            <div class="avatar">
                                <img src="https://www.meska.hu/img/avatar/thumbnail/<?=$p['avatar']?>">
                            </div>
                            <div class="sum_price">
                                Összesen: <?php echo $sum_price; ?> Ft
                            </div>
                            <div class="clear"></div>
                        </button>
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <?php $sum_price = 0; $amount = 1; ?>
                                <div class="product">
                                    <div class="name"><?=$p['product_name']?></div>
                                    <div class="amount"><?php echo $amount.' db'; ?></div>
                                    <div class="price"><?=$p['price']?> Ft</div>
                                    <?php $sum_price = $sum_price + $p['price']; ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="product">
                                    <div class="name"><?=$p['product_name']?></div>
                                    <div class="amount"><?php echo $amount.' db'; ?></div>
                                    <div class="price"><?=$p['price']?> Ft</div>
                                    <?php $sum_price = $sum_price + $p['price']; ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="product">
                                    <div class="name"><?=$p['product_name']?></div>
                                    <div class="amount"><?php echo $amount.' db'; ?></div>
                                    <div class="price"><?=$p['price']?> Ft</div>
                                    <?php $sum_price = $sum_price + $p['price']; ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="sum_price">
                                    Összesen: <?php echo $sum_price; ?> Ft<br><br>
                                </div>
                                <div class="deliver">
                                    <p>Szállítás, fizetés</p>
                                    <input type="radio">Postai küldemény 1440 Ft <?php $delivery_1 = 1550; ?><br>
                                    <input type="radio" checked="checked">Futárszolgálat 990 Ft <?php $delivery_2 = 990; ?>
                                    <hr>
                                    <?php $sum_price = $sum_price + $delivery_2; ?>
                                    <?=$p['shop_name']?> eladónak fizetendő: <?php echo $sum_price; ?> Ft
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout">
                        Ajándékkártya kód <input type="text"><br>
                        Összesen fizetendő: <?php echo $sum_price; ?> Ft<br>
                        <input type="button" value="Megrendelem">
                    </div>
                </div>
            </div>
            <div class="customer-info col-6">
                <div class="content">
                    <div class="personal-info">
                        <p>Személyes adatok</p>
                        Név<br>
                        E-mail<br>
                        Tel.<br>
                    </div>
                    <div class="delivery-info">
                        <p>Szállítási adatok</p>
                        Irányító szám<br>
                        Város<br>
                        Cím<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>
