<?php include_once('../header.php'); ?>
<?php include_once('data.php'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="responsive.css">

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
                <input type="text" id="search-bar">
                <img src="https://image.flaticon.com/icons/svg/54/54554.svg">
            </div>
            <div class="clear"></div>
            <div class="highlight-row">
                <div class="headline">Kiemelt termékek</div>
                <div class="content">
                    <div class="highlighted-product col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="highlighted-product-box">1</div>
                    </div>
                    <div class="highlighted-product col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="highlighted-product-box">2</div>
                    </div>
                    <div class="highlighted-product col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="highlighted-product-box">3</div>
                    </div>
                    <div class="highlighted-product col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="highlighted-product-box">4</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="benefits-row">
                <div class="headline">Meska előnyei</div>
                <div class="content">
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box"></div>
                        <span class="benefits-text">Biztonságos</span>
                    </div>
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box"></div>
                        <span class="benefits-text">Bankkártya</span>
                    </div>
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box"></div>
                        <span class="benefits-text">Kézműves</span>
                    </div>
                    <div class="benefits col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="benefits-box"></div>
                        <span class="benefits-text">Egyedi</span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="browser-row">
                <div class="headline">Szemezgető</div>
                <div class="content">
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">1</div>
                    </div>
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">2</div>
                    </div>
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">3</div>
                    </div>
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">4</div>
                    </div>
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">5</div>
                    </div>
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">6</div>
                    </div>
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">7</div>
                    </div>
                    <div class="browser col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="browser-box">8</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="numbers-row">
                <div class="headline">Meska számokban</div>
                <div class="content">
                    <div class="numbers col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="numbers-number">8</div>
                        <div class="numbers-title">Éve</div>
                    </div>
                    <div class="numbers col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="numbers-number">3, 254</div>
                        <div class="numbers-title">Alkotó</div>
                    </div>
                    <div class="numbers col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="numbers-number">110, 226</div>
                        <div class="numbers-title">Kézműves termék</div>
                    </div>
                    <div class="numbers col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="numbers-number">224, 578</div>
                        <div class="numbers-title">Felhasználó</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="recently-bought-row">
                <div class="headline">Épp most vették meg</div>
                <div class="content">
                    <div class="recently-bought col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-bought-box">1</div>
                    </div>
                    <div class="recently-bought col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-bought-box">2</div>
                    </div>
                    <div class="recently-bought col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-bought-box">3</div>
                    </div>
                    <div class="recently-bought col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-bought-box">4</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="customers-say-row">
                <div class="headline">Meskáról mondták</div>
                <div class="content">
                    <div class="customers-say col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="customers-say-pic"></div>
                        <div class="customers-say-quote">"A Meska egy jó dolog!"</div>
                        <div class="customers-say-name">Kiss Kázmér, Gyékényes</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="recently-uploaded-row">
                <div class="headline">Épp most töltötték fel (Friss, még ropogós! :)</div>
                <div class="content">
                    <div class="recently-uploaded col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-uploaded-box">1</div>
                    </div>
                    <div class="recently-uploaded col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-uploaded-box">2</div>
                    </div>
                    <div class="recently-uploaded col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-uploaded-box">3</div>
                    </div>
                    <div class="recently-uploaded col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div class="recently-uploaded-box">4</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>
