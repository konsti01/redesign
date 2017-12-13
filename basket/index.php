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
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
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
                    </div>
                    <div class="seller">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
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
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
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
                    </div>
                    <div class="seller">
                        <div class="collapse multi-collapse" id="multiCollapseExample3">
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
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
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
                    </div>
                </div>
            </div>
            <div class="customer-info col-6">
                <div class="content">megrendelő adatai</div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>
