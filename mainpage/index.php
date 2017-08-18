<?php include_once('../header.php'); ?>
<?php include_once('data.php'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="responsive.css">

<!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

<!-- FONTS -->
<link rel="stylesheet" type="text/css" href="fonts.css">

<!-- BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="BootstrapXL.css">

<div class="row">
    <div class="row-wrapper">
        <!-- LEFT COL -->
        <div class="row-left">
            <div class="sidebar col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <!--<a href="#" class="sidebar-trigger">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span>Kategóriák</span>
                </a>-->
                <div class="sidebar-content col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="main">
                        <button type="button" onclick="topFunction()" class="trigger btn btn-info" data-toggle="collapse" data-target="#00">
                            <span>Kategóriák</span>
                            <div class="glyphicon glyphicon-menu-hamburger" style="padding-right: 7px; top: 2px;"></div>
                        </button>
                        <div id="00" class="subnav collapse"></div>
                    </div>
                    <div class="nav-wrap">
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#01">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Állatfelszerelések</span>
                            </button>
                            <div id="01" class="subnav collapse">
                                <a href="">Állatfelszerelések Almenü 1</a>
                                <a href="">Állatfelszerelések Almenü 2</a>
                                <a href="">Állatfelszerelések Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#02">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Baba-mama-gyerek</span>
                            </button>
                            <div id="02" class="subnav collapse">
                                <a href="">Baba-mama-gyerek Almenü 1</a>
                                <a href="">Baba-mama-gyerek Almenü 2</a>
                                <a href="">Baba-mama-gyerek Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#03">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Bútor</span>
                            </button>
                            <div id="03" class="subnav collapse">
                                <a href="">Bútor Almenü 1</a>
                                <a href="">Bútor Almenü 2</a>
                                <a href="">Bútor Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#04">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Dekoráció</span>
                            </button>
                            <div id="04" class="subnav collapse">
                                <a href="">Dekoráció Almenü 1</a>
                                <a href="">Dekoráció Almenü 2</a>
                                <a href="">Dekoráció Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#05">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Ékszer, óra</span>
                            </button>
                            <div id="05" class="subnav collapse">
                                <a href="">Ékszer, óra Almenü 1</a>
                                <a href="">Ékszer, óra Almenü 2</a>
                                <a href="">Ékszer, óra Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#06">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Esküvő</span>
                            </button>
                            <div id="06" class="subnav collapse">
                                <a href="">Esküvő Almenü 1</a>
                                <a href="">Esküvő Almenü 2</a>
                                <a href="">Esküvő Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#07">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Férfiaknak</span>
                            </button>
                            <div id="07" class="subnav collapse">
                                <a href="">Férfiaknak Almenü 1</a>
                                <a href="">Férfiaknak Almenü 2</a>
                                <a href="">Férfiaknak Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#08">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Játék</span>
                            </button>
                            <div id="08" class="subnav collapse">
                                <a href="">Játék Almenü 1</a>
                                <a href="">Játék Almenü 2</a>
                                <a href="">Játék Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#09">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Képzőművészet</span>
                            </button>
                            <div id="09" class="subnav collapse">
                                <a href="">Képzőművészet Almenü 1</a>
                                <a href="">Képzőművészet Almenü 2</a>
                                <a href="">Képzőművészet Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#10">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Konyhafelszerelés</span>
                            </button>
                            <div id="10" class="subnav collapse">
                                <a href="">Konyhafelszerelés Almenü 1</a>
                                <a href="">Konyhafelszerelés Almenü 2</a>
                                <a href="">Konyhafelszerelés Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#11">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Magyar motívumokkal</span>
                            </button>
                            <div id="11" class="subnav collapse">
                                <a href="">Magyar motívumokkal Almenü 1</a>
                                <a href="">Magyar motívumokkal Almenü 2</a>
                                <a href="">Magyar motívumokkal Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#12">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Mindenmás</span>
                            </button>
                            <div id="12" class="subnav collapse">
                                <a href="">Mindenmás Almenü 1</a>
                                <a href="">Mindenmás Almenü 2</a>
                                <a href="">Mindenmás Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#13">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Naptár, képeslap, album</span>
                            </button>
                            <div id="13" class="subnav collapse">
                                <a href="">Naptár, képeslap, album Almenü 1</a>
                                <a href="">Naptár, képeslap, album Almenü 2</a>
                                <a href="">Naptár, képeslap, album Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#14">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Otthon, lakberendezés</span>
                            </button>
                            <div id="14" class="subnav collapse">
                                <a href="">Otthon, lakberendezés Almenü 1</a>
                                <a href="">Otthon, lakberendezés Almenü 2</a>
                                <a href="">Otthon, lakberendezés Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#15">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Ruha, divat, cipő</span>
                            </button>
                            <div id="15" class="subnav collapse">
                                <a href="">Ruha, divat, cipő Almenü 1</a>
                                <a href="">Ruha, divat, cipő Almenü 2</a>
                                <a href="">Ruha, divat, cipő Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#16">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Szépségápolás</span>
                            </button>
                            <div id="16" class="subnav collapse">
                                <a href="">Szépségápolás Almenü 1</a>
                                <a href="">Szépségápolás Almenü 2</a>
                                <a href="">Szépségápolás Almenü 3</a>
                            </div>
                        </div>
                        <div class="nav">
                            <button type="button" class="trigger btn btn-info" data-toggle="collapse" data-target="#17">
                                <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                                <span>Táska</span>
                            </button>
                            <div id="17" class="subnav collapse">
                                <a href="">Táska Almenü 1</a>
                                <a href="">Táska Almenü 2</a>
                                <a href="">Táska Almenü 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="bannerhely col-md-2-250 col-lg-2-250 col-xl-2-250">BANNERHELY</div>
            <div class="widget col-md-2-250 col-lg-2-250 col-xl-2-250">WIDGET</div>
        </div>
        <!-- RIGHT COL -->
        <div class="row-right">
            <div class="search col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="video-background">
                    <div class="video-foreground">
                        <iframe src="https://www.youtube.com/embed/gAx99kwsMxk?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=gAx99kwsMxk" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="search-bar-wrap">
                    <img src="https://image.flaticon.com/icons/svg/54/54554.svg">
                    <input type="text" id="search-bar">
                    <button>
                        <span>Keresés</span>
                    </button>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="numbers-row">
                <div class="headline">Meska számokban</div>
                <div class="content">
                    <div class="number-wrapper">
                        <ul>
                            <li class="col-sm-3 col-lg-3 column fadeInUp my-animation">
                                <div class="number-container">
                                    <div class="number" data-count="8">0</div>
                                    <h6 class="number-details">Éve</h6>
                                </div>
                            </li>
                            <li class="col-sm-3 col-lg-3 column fadeInUp my-animation">
                                <div class="number-container">
                                    <div class="number" data-count="3254">0</div>
                                    <h6 class="number-details">Alkotó</h6>
                                </div>
                            </li>
                            <li class="col-sm-3 col-lg-3 column fadeInUp my-animation">
                                <div class="number-container">
                                    <div class="number" data-count="110226">0</div>
                                    <h6 class="number-details">Kézműves termék</h6>
                                </div>
                            </li>
                            <li class="col-sm-3 col-lg-3 column fadeInUp my-animation">
                                <div class="number-container">
                                    <div class="number" data-count="224578">0</div>
                                    <h6 class="number-details">Felhasználó</h6>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="highlight-row">
                <div class="headline">Kiemelt termékek</div>
                <div class="content">
                    <?php
                        $count = 0;
                        foreach($products as $p){ ?>

                            <div class="products col-xs-6 col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5">
                                <div class="product-box" onclick="location.href='#';">
                                    <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                        <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                                        <img src="img/plus.svg" class="icon">
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
                                        <div class="price"><?=$p['formatted_price']?></div>
                                        <div class="basket">Kosárba »</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <?php
                            $count++;
                            if ($count == 8){
                                break; //$count. loop után megáll
                            }
                        }
                    ?>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="benefits-row">
                <div class="headline">Meska előnyei</div>
                <div class="content">
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box">
                            <img src="img/icons/svg/lock-locked.svg">
                        </div>
                        <span class="benefits-text">Biztonságos</span>
                    </div>
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                        </div>
                        <span class="benefits-text">Bankkártya</span>
                    </div>
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <span class="benefits-text">Kézműves</span>
                    </div>
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box">
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <span class="benefits-text">Egyedi</span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="browser-row">
                <div class="headline">Szemezgető</div>
                <div class="content">
                    <?php
                    $count = 0;
                    foreach($products as $p){ ?>

                        <div class="products col-xs-6 col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5">
                            <div class="product-box" onclick="location.href='#';">
                                <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                    <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                                    <img src="img/plus.svg" class="icon">
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
                                    <div class="price"><?=$p['formatted_price']?></div>
                                    <div class="basket">Kosárba »</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <?php
                        $count++;
                        if ($count == 12){
                            break; //$count. loop után megáll
                        }
                    }
                    ?>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="recently-bought-row">
                <div class="headline">Épp most vették meg</div>
                <div class="content">
                    <?php
                    $count = 0;
                    foreach($products as $p){ ?>

                        <div class="products col-xs-6 col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5">
                            <div class="product-box" onclick="location.href='#';">
                                <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                    <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                                    <img src="img/plus.svg" class="icon">
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
                                    <div class="price"><?=$p['formatted_price']?></div>
                                    <div class="basket">Kosárba »</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <?php
                        $count++;
                        if ($count == 8){
                            break; //$count. loop után megáll
                        }
                    }
                    ?>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="customers-say-row">
                <div class="headline">Meskáról mondták</div>
                <div class="content">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <h4>
                                <blockquote>Az az egyik legjobb a Meskában, hogy azonnali visszajelzést kapok, ami hatalmas segítség abban, hogy tudjam, merre menjek tovább, min érdemes változtatni, hogyan tovább.
                                    <cite>estikristoneszter</cite>
                                </blockquote>

                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/estikristoneszter_avatar_163340.JPG">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Nekem a Meskában az tetszik a legjobban, hogy az itteni eladásainkkal egyből egy reklámozási lehetőséget is kapunk, mert egy látogatott felületen megjelennek a termékeink, fotóval.
                                    <cite>gabigobre</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/gabigobre_avatar_3437.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Nekem a Meska segített, nagyszerű összekötő kapocs a kézművesek és vásárlók közt. Kényelmesen, könnyen használható felületen, többféle fizetési lehetőséggel vehetik meg a nekik tetsző terméket, én pedig egyszerűen tudom nyilvántartani és kezelni a megrendeléseket
                                    <cite>Amuletta</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/amuletta_avatar_57073.JPG">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Ha nem lenne a Meska felülete, sokkal több időm menne el azzal, hogy a potenciális vevőket megkeressem, és nem jutna elég kapacitás a munkára, azaz az alkotásra.
                                    <cite>Nina</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/nina_avatar_4998.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Aminek különösen örülök, az az, hogy a vidéken élő embereket is segít elérni ez az elektronikus piactér.
                                    <cite>designbyrothaniko</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/designbyrothaniko_avatar_131326.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Mindent online, a Meskán értékesítünk, így tudunk a legtöbb potenciális érdeklődőhöz eljutni.
                                    <cite>sanyikovacs</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/sanyikovacs_avatar_2500.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>A tárgyaim intimek, finom, nőies, légies darabok. Azt gondolná az ember, hogy ezeket mindenképp kézbe kell venni ahhoz, hogy szerelembe essünk velük. De ez nem minden esetben igaz. Van, aki ajándékba veszi, van, aki magának. Sok a visszatérő vevőm is: aki már egyet vett, előfordul, hogy még vesz hozzá újabb kiegészítő darabokat. Jól működik az online értékesítés.
                                    <cite>DiosGabiKeramia</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/fb_avatar_25688.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>A Meskán sikerült megtalálnom a vevőkörömet. 2012 decemberében regisztráltam a kézműves portálra, és azóta több mint száz ruhát, sapkát, kalapot, táskát vásároltak tőlem. El tudod ezt képzelni, milyen érzés? Előtte már jó hosszú ideje szinte semmit nem adtam el. Úgy érzem, itt elfogadják és szeretik a stílusomat, és a megfelelő emberekhez jut el a hírem. Olyanokhoz, akik kedvelik és értékelik a tapasztalatomat, a ruháimat, az egyediséget, hogy kézzel dolgozom. Előtte tíz évig próbáltam egy saját vásárlókört kiépíteni.
                                    <cite>brokat</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/brokat_avatar_82864.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Hittem abban, hogy lesz, akit megérintenek az ékszereim. Ebben a Meska.hu sokat segített, mivel a kis műhelyem híre nem tudna sok emberhez eljutni, de az interneten könnyebben megismerhetnek. Nekem ezzel a lehetőséggel kinyílt a világ..
                                    <cite>egszeresz</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/egszeresz_avatar_4085.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Annyi minden szépséget készítünk kézzel, hogy talán külföldön van erre kereslet, és el is lehet adni, mert az emberek kedvelik, ha egyedi tárgyaik vannak, ha kézzel készült ruhákat hordanak, ha olyan ajándékkal lephetik meg a szeretteiket, ami nem fog szembejönni velük az utcán. A Meskán egymásra találtak a kézművesek és a kézzel készült, egyedi tárgyak rajongói.
                                    <cite>Gemma</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/gemma_avatar_18843.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Amikor a Meskán a vásárlóim kedves, meleg hangulatú leveleket küldenek, illetve édesebbnél édesebb fényképeket, amelyeken boldogan szorítják magukhoz a Kincseik az általam készített figurákat. Na olyankor szárnyalni tudnék a boldogságtól! És csodálatos élmény az is, amikor a vásárlóimmal együtt aprólékos részletességgel tervezgetünk meg valamit, amikor valóra válthatom valakinek az álmát és elkészíthetek egy régen áhított kívánságot.
                                    <cite>Jam81</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/Jam81_avatar_50759.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>
                                <blockquote>Gyesen voltam a lányommal, így maradt egy kis szabadidőm. Nekiálltam újra drótozni, amivel először 16 éves koromban kezdtem foglalkozni. Blogot írtam, feltöltöttem az ékszerek képeit, és meglepődtem, hogy tetszik másoknak. Akkoriban indult a Meska, gondoltam, megpróbálom. Újra meglepődtem, mert megvették az ékszereim. Amikor letelt a gyes, nem is mentem vissza dolgozni, maradt az ékszerkészítés.
                                    <cite>kricsar</cite>
                                </blockquote>
                                <div class="customer-member">
                                    <div class="photo-member">
                                        <div class="img-container">
                                            <div class="overlay">
                                                <img src="https://www.meska.hu/img/avatar/medium/kricsar_avatar_363.JPG">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <!--
                        <div class="owl-nav" style="display: none; visibility: hidden">
                            <div class="owl-prev">prev</div>
                            <div class="owl-next">next</div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div class="recently-uploaded-row">
                <div class="headline">Épp most töltötték fel (Friss, még ropogós! :)</div>
                <div class="content">
                    <?php
                    $count = 0;
                    foreach($products as $p){ ?>

                        <div class="products col-xs-6 col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5">
                            <div class="product-box" onclick="location.href='#';">
                                <a href="https://www.meska.hu/t<?=$p['id']?>" class="image-wrap">
                                    <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                                    <img src="img/plus.svg" class="icon">
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
                                    <div class="price"><?=$p['formatted_price']?></div>
                                    <div class="basket">Kosárba »</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <?php
                        $count++;
                        if($count == 8){
                            break; //$count. loop után megáll
                        }
                    }
                    ?>
                    <div class="clear"></div>
                </div>
                <a href=""><div class="button">Nézd meg a legújabb termékeket »</div></a>
            </div>
            <div class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>
    </div>
</div>
<div class="newsletter">
    <span>Feliratkozás a hírlevélre</span>
    <form>
        <input type="text" name="name" placeholder="Név" class="input-text">
        <input type="text" name="email" placeholder="E-mail cím" class="input-text">
        <input type="submit" name="submit" value="Feliratkozok!" class="input-button">
    </form>
</div>
<?php include_once('../footer.php'); ?>
