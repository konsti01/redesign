<?php include_once('../header.php'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="/assets/css/topnav.css">
<link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">

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
                <div class="bannerspot width-250">BANNERHELY</div>
                <div class="widget width-250">WIDGET</div>
            </div>
        </div>
        <!-- RIGHT COL -->
        <div class="row-right">
            <div class="dashboard-container">
                <div class="dashboard-wrapper row">
                    <div class="dash-wrapper col-3">
                        <div class="dash first">
                            <i class="far fa-credit-card"></i>
                            <p class="number">7348567<span class="number-after"> Ft</span></p>
                            <p class="text">Összes bevétel</p>
                            <button>Pénzügyi egyenleg</button>
                        </div>
                    </div>
                    <div class="dash-wrapper col-3">
                        <div class="dash second">
                            <i class="far fa-heart"></i>
                            <p class="number">2340<span class="number-after"> Ft</span></p>
                            <p class="text">Aktuális egyenleg</p>
                            <button>Egyenleg feltöltése</button>
                        </div>
                    </div>
                    <div class="dash-wrapper col-3">
                        <div class="dash third">
                            <i class="far fa-shopping-cart"></i>
                            <p class="number">2<span class="number-after"> új megrendelés</span></p>
                            <p class="text">Összesen 341 megrendelés</p>
                        </div>
                    </div>
                    <div class="dash-wrapper col-3">
                        <div class="dash fourth">
                            <i class="far fa-envelope"></i>
                            <p class="number">3<span class="number-after"> új üzenet</span></p>
                            <p class="text">Összesen 251 üzenet</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-wrapper row">
                    <div class="dash-wrapper col-3">
                        <div class="dash fifth">
                            <i class="far fa-star"></i>
                            <p class="number">4<span class="number-after"> új értékelés</span></p>
                            <p class="text">Összesen 67 értékelés</p>
                        </div>
                    </div>
                    <div class="dash-wrapper col-3">
                        <div class="dash sixth">
                            <i class="far fa-user"></i>
                            <p class="number">5<span class="number-after"> új vásárlás</span></p>
                            <p class="text">Összesen 348 vevő</p>
                        </div>
                    </div>
                    <div class="dash-wrapper col-3">
                        <div class="dash seventh">
                            <i class="far fa-paperclip"></i>
                            <p class="number">174<span class="number-after"> aktív termék</span></p>
                            <p class="text">Összesen 467 termék</p>
                        </div>
                    </div>
                    <div class="dash-wrapper col-3">
                        <div class="dash eighth">
                            <i class="far fa-home"></i>
                            <p class="number">BOLT<span class="number-after"> adatai</span></p>
                            <p class="text">Bolt adatainak szerkesztése</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-wrapper row">
                    <div class="dash-wrapper col-3">
                        <div class="dash ninth">
                            <i class="far fa-lightbulb"></i>
                            <p class="number">6<span class="number-after"> új tipp</span></p>
                            <p class="text">Nézd meg az összeset</p>
                        </div>
                    </div>
                    <div class="dash-wrapper col-3">
                        <div class="dash tenth">
                            <i class="far fa-clock"></i>
                            <p class="number">6<span class="number-after"> hónapja</span></p>
                            <p class="text">vagy alkotó a meskán</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-wrapper row">
                    <div class="dash-wrapper col-12">
                        <div class="dash alert">
                            <i class="far fa-exclamation-triangle"></i>
                            <p class="number">FIGYELEM!<span class="number-after"></span></p>
                            <p class="text">A következő kampány (húsvét) feltöltése 2018. 04. 03-án (15 nap múlva) indul!</p>
                            <button>Nézd meg a részleteket</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>

<!-- LocalJS -->
<script src="script.js"></script>