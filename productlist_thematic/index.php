<?php include_once('../header.php'); ?>
<?php include_once('data.php'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="/assets/css/topnav.css">
<link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
<link rel="stylesheet" type="text/css" href="productlist_thematic.css">
<link rel="stylesheet" type="text/css" href="productlist_thematic_responsive.css">

<div class="row">
    <div class="row-wrapper">
        <!-- LEFT COL -->
        <div class="row-left">
            <div class="sidebar col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="sidebar-content col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="main">
                        <button type="button" onclick="topFunction()" class="trigger btn btn-info" data-toggle="collapse" data-target="#00">
                            <span>Kategóriák</span>
                            <i class="far fa-bars" aria-hidden="true"></i>
                        </button>
                        <div id="00" class="subnav collapse"></div>
                    </div>
                    <div class="nav-wrap">
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#01">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Állatfelszerelések</span>
                            </button>
                            <div id="01" class="subnav collapse">
                                <a href="">Állatfelszerelések Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Állatfelszerelések Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Állatfelszerelések Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#02">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Baba-mama-gyerek</span>
                            </button>
                            <div id="02" class="subnav collapse">
                                <a href="">Baba-mama-gyerek Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Baba-mama-gyerek Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Baba-mama-gyerek Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#03">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Bútor</span>
                            </button>
                            <div id="03" class="subnav collapse">
                                <a href="">Bútor Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Bútor Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Bútor Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#04">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Dekoráció</span>
                            </button>
                            <div id="04" class="subnav collapse">
                                <a href="">Dekoráció Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Dekoráció Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Dekoráció Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#05">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Ékszer, óra</span>
                            </button>
                            <div id="05" class="subnav collapse">
                                <a href="">Ékszer, óra Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Ékszer, óra Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Ékszer, óra Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#06">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Esküvő</span>
                            </button>
                            <div id="06" class="subnav collapse">
                                <a href="">Esküvő Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Esküvő Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Esküvő Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#07">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Férfiaknak</span>
                            </button>
                            <div id="07" class="subnav collapse">
                                <a href="">Férfiaknak Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Férfiaknak Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Férfiaknak Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#08">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Játék</span>
                            </button>
                            <div id="08" class="subnav collapse">
                                <a href="">Játék Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Játék Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Játék Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#09">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Képzőművészet</span>
                            </button>
                            <div id="09" class="subnav collapse">
                                <a href="">Képzőművészet Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Képzőművészet Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Képzőművészet Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#10">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Konyhafelszerelés</span>
                            </button>
                            <div id="10" class="subnav collapse">
                                <a href="">Konyhafelszerelés Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Konyhafelszerelés Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Konyhafelszerelés Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#11">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Magyar motívumokkal</span>
                            </button>
                            <div id="11" class="subnav collapse">
                                <a href="">Magyar motívumokkal Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Magyar motívumokkal Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Magyar motívumokkal Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#12">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Mindenmás</span>
                            </button>
                            <div id="12" class="subnav collapse">
                                <a href="">Mindenmás Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Mindenmás Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Mindenmás Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#13">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Naptár, képeslap, album</span>
                            </button>
                            <div id="13" class="subnav collapse">
                                <a href="">Naptár, képeslap, album Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Naptár, képeslap, album Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Naptár, képeslap, album Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#14">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Otthon, lakberendezés</span>
                            </button>
                            <div id="14" class="subnav collapse">
                                <a href="">Otthon, lakberendezés Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Otthon, lakberendezés Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Otthon, lakberendezés Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#15">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Ruha, divat, cipő</span>
                            </button>
                            <div id="15" class="subnav collapse">
                                <a href="">Ruha, divat, cipő Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Ruha, divat, cipő Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Ruha, divat, cipő Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#16">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Szépségápolás</span>
                            </button>
                            <div id="16" class="subnav collapse">
                                <a href="">Szépségápolás Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Szépségápolás Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Szépségápolás Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#17">
                                <i class="far fa-trophy" aria-hidden="true"></i>
                                <span>Táska</span>
                            </button>
                            <div id="17" class="subnav collapse">
                                <a href="">Táska Almenü 1<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Táska Almenü 2<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                                <a href="">Táska Almenü 3<i class="far fa-level-down-alt fa-rotate-90" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="sticky-banner">
                <div class="bannerspot-pl width-250">BANNERHELY</div>
                <div class="widget-pl width-250">WIDGET</div>
            </div>
        </div>
        <!-- RIGHT COL -->
        <div class="row-right">
            <div class="specify">
                <ol class="breadcrumb">
                    <li><a href="https://www.meska.hu/">
                            <i class="far fa-home" aria-hidden="true"></i>
                            <img src="https://www.meska.hu/bootstrap/svg/meska_hu.svg" style="" class="breadcrumb-meskahu"/>
                        </a>
                    </li>
                    <li class="active">
                        <span class="title">
                            <a href="https://www.meska.hu/s/Mind">Rémkastély</a>
                        </span>
                    </li>
                </ol>
                <div class="search-row">
                    <div class="content">
                        <p>Rémkastély tematikus termékajánló</p>
                        <p>Összeállította: <span>username</span></p>
                    </div>
                </div>
            </div>

            <div class="category-desc">
                <h3 class="title">Termékkategória leírása</h3>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>

            <div id="product-wrapper" class="row cont">
                <?php
                foreach ($products as $p){ ?>
                    <div class="products col-sm-6 col-md-4 col-lg-3 col-xl-2-custom padding5">
                        <div class="product-box" onclick="location.href='#';">
                            <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                <!--
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                -->
                                <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                            </a>
                            <div class="seller-pic">
                                <?php if ($p['avatar'] != '') { ?>
                                <a href="https://<?=$p['shop_name']?>.meska.hu">
                                    <img src="https://www.meska.hu/img/avatar/thumbnail/<?=$p['avatar']?>">
                                </a>
                                <?php } else {?>
                                <a href="https://<?=$p['shop_name']?>.meska.hu">
                                    <img src="https://www.meska.hu/images/no_avatar.jpg">
                                </a>
                                <?php } ?>
                            </div>
                            <div class="product-description">
                                <a href="https://<?=$p['shop_name']?>.meska.hu">
                                    <div class="seller"><?=$p['shop_name']?></div>
                                </a>
                                <a href="https://www.meska.hu/t<?=$p['id']?>">
                                    <div class="description"><?=$p['product_name']?></div>
                                </a>
                            </div>
                            <div class="product-price">
                                <div class="price"><?=$p['formatted_price']?></div>
                                <div class="basket">Kosárba »</div>
                                <div class="basket-mobile"><i class="far fa-shopping-cart" aria-hidden="true"></i></div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="social">
                <a href="">
                    <div class="facebook-share">
                        <i class="fab fa-facebook"></i>
                        <span>Megosztom</span>
                    </div>
                </a>
            </div>

            <div class="recommendations">
                <a href="">Korábbi tematikus termékajánlók</a>
            </div>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>

<!-- LocalJS -->
<script src="script.js"></script>