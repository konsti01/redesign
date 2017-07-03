<?php include_once('../header.php'); ?>
<?php include_once('data.php'); ?>

<?php

function productPrice($price, $currency = "Ft") {
    $ret = number_format($price, NULL, " ", " ");
    if ($currency != ''){
        if ($currency == '.'){
            $ret .= ".- Ft";
        } else {
            $ret .= " ".$currency;
        }
    }
    return $ret;
}

/*function cut($s, $lenght, $append) {
    if (mb_strlen($s, 'utf8') >= $lenght) {
        return str_replace("\\", "", mb_substr($s, 0, $lenght, 'utf8') . $append);
    }
    return $s;
}*/

?>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/productlist/style.css">
<link rel="stylesheet" type="text/css" href="/productlist/responsive.css">

<!-- FONTS -->
<link rel="stylesheet" type="text/css" href="/productlist/fonts.css">

<!-- BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="/productlist/BootstrapXL.css">

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
            <div class="bannerhely col-xs-12 col-sm-12 col-md-12 col-lg-12">BANNERHELY</div>
            <div class="widget col-xs-12 col-sm-12 col-md-12 col-lg-12">WIDGET</div>
        </div>
        <!-- RIGHT COL -->
        <div class="row-right">
            <div class="specify">
                <ol class="breadcrumb">
                    <li><a href="https://www.meska.hu/">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <img src="https://www.meska.hu/bootstrap/svg/meska_hu.svg" style="" class="breadcrumb-meskahu"/>
                        </a>
                    </li>
                    <li class="active"><a href="https://www.meska.hu/s/Mind"></a><span class="title">Termékkategória</span></li>
                </ol>
                <div class="search-row">
                    <div id="technika" class="btn-group">
                            <select class="technika">
                                <option value="00" disabled selected>Technika</option>
                                <option value="01">Baba-és bábkészítés</option>
                                <option value="02">Bőrművesség</option>
                                <option value="03">Csipkekészítés</option>
                                <option value="04">Csomózás</option>
                                <option value="05">Decoupage, szalvétatechnika</option>
                                <option value="06">Ékszerkészítés</option>
                                <option value="07">Famegmunkálás</option>
                                <option value="08">Fémmegmunkálás</option>
                                <option value="09">Festészet</option>
                                <option value="10">Festett tárgyak</option>
                                <option value="11">Foltberakás</option>
                                <option value="12">Fonás (csuhé, gyékény, stb.)</option>
                                <option value="13">Fotó, grafika, rajz, illusztráció</option>
                                <option value="14">Gyertya-, mécseskészítés</option>
                                <option value="15">Gyöngyfűzés</option>
                                <option value="16">Gyurma</option>
                                <option value="17">Hímzés</option>
                                <option value="18">Horgolás</option>
                                <option value="19">Kerámia</option>
                                <option value="20">Kovácsoltvas</option>
                                <option value="21">Kozmetikum készítés</option>
                                <option value="22">Kőfaragás</option>
                                <option value="23">Könyvkötés</option>
                                <option value="24">Kötés</option>
                                <option value="25">Mézeskalácssütés</option>
                                <option value="26">Mindenmás</option>
                                <option value="27">Mozaik</option>
                                <option value="28">Nemezelés</option>
                                <option value="29">Népi játék és hangszerkészítés</option>
                                <option value="30">Ötvös</option>
                                <option value="31">Papírművészet</option>
                                <option value="32">Patchwork, foltvarrás</option>
                                <option value="33">Selyemfestés</option>
                                <option value="34">Szappankészítés</option>
                                <option value="35">Szobrászat</option>
                                <option value="36">Szövés</option>
                                <option value="37">Tűzzománc</option>
                                <option value="38">Újrahasznosított alapanyagból készült termékek</option>
                                <option value="39">Üvegművészet</option>
                                <option value="40">Varrás</option>
                                <option value="41">Virágkötés</option>
                                <option value="42">Zsugorka</option>
                            </select>
                    </div>
                    <div id="szin"class="btn-group">
                        <select class="szin">
                            <option value="00" disabled selected>Szín</option>
                            <option value="01">Arany</option>
                            <option value="02">Áttetsző</option>
                            <option value="03">Barna</option>
                            <option value="04">Beige</option>
                            <option value="05">Bordó</option>
                            <option value="06">Bronz</option>
                            <option value="07">Ezüst</option>
                            <option value="08">Fehér</option>
                            <option value="09">Fekete</option>
                            <option value="10">Kék</option>
                            <option value="11">Lila</option>
                            <option value="12">Piros</option>
                            <option value="13">Réz</option>
                            <option value="14">Rózsaszín</option>
                            <option value="15">Sárga</option>
                            <option value="16">Pink/Magenta</option>
                            <option value="17">Szürke</option>
                            <option value="18">Türkiz</option>
                            <option value="19">Zöld</option>
                            <option value="20">Csíkos</option>
                            <option value="21">Kockás</option>
                            <option value="22">Mintás</option>
                            <option value="23">Pöttyös</option>
                            <option value="24">Tarka</option>
                            <option value="25">Narancssárga</option>
                        </select>

                        <!--
                        <ul id="szin" class="dropdown-menu">
                            <input type="text" placeholder="Keresés..." class="button-search">
                            <li><a href="https://www.meska.hu/s/arany/co-512"><div class="color gold"></div>Arany</a></li>
                            <li><a href="https://www.meska.hu/s/attetszo/co-513"><div class="color transparent"></div>Áttetsző</a></li>
                            <li><a href="https://www.meska.hu/s/barna/co-514"><div class="color brown"></div>Barna</a></li>
                            <li><a href="https://www.meska.hu/s/beige/co-515"><div class="color beige"></div>Beige</a></li>
                            <li><a href="https://www.meska.hu/s/bordo/co-516"><div class="color deep-red"></div>Bordó</a></li>
                            <li><a href="https://www.meska.hu/s/bronz/co-517"><div class="color bronze"></div>Bronz</a></li>
                            <li><a href="https://www.meska.hu/s/ezust/co-518"><div class="color silver"></div>Ezüst</a></li>
                            <li><a href="https://www.meska.hu/s/feher/co-519"><div class="color white"></div>Fehér</a></li>
                            <li><a href="https://www.meska.hu/s/fekete/co-520"><div class="color black"></div>Fekete</a></li>
                            <li><a href="https://www.meska.hu/s/kek/co-521"><div class="color blue"></div>Kék</a></li>
                            <li><a href="https://www.meska.hu/s/lila/co-522"><div class="color purple"></div>Lila</a></li>
                            <li><a href="https://www.meska.hu/s/piros/co-523"><div class="color red"></div>Piros</a></li>
                            <li><a href="https://www.meska.hu/s/rez/co-524"><div class="color copper"></div>Réz</a></li>
                            <li><a href="https://www.meska.hu/s/rozsaszin/co-525"><div class="color pink"></div>Rózsaszín</a></li>
                            <li><a href="https://www.meska.hu/s/sarga/co-526"><div class="color yellow"></div>Sárga</a></li>
                            <li><a href="https://www.meska.hu/s/pinkmagenta/co-791"><div class="color magenta"></div>Pink/Magenta</a></li>
                            <li><a href="https://www.meska.hu/s/szurke/co-527"><div class="color gray"></div>Szürke</a></li>
                            <li><a href="https://www.meska.hu/s/turkiz/co-528"><div class="color turquoise"></div>Türkiz</a></li>
                            <li><a href="https://www.meska.hu/s/zold/co-529"><div class="color green"></div>Zöld</a></li>
                            <li><a href="https://www.meska.hu/s/csikos/co-530"><div class="color stripe"></div>Csíkos</a></li>
                            <li><a href="https://www.meska.hu/s/kockas/co-531"><div class="color ska"></div>Kockás</a></li>
                            <li><a href="https://www.meska.hu/s/mintas/co-532"><div class="color pattern"></div>Mintás</a></li>
                            <li><a href="https://www.meska.hu/s/pottyos/co-533"><div class="color dot"></div>Pöttyös</a></li>
                            <li><a href="https://www.meska.hu/s/tarka/co-534"><div class="color tarka"></div>Tarka</a></li>
                            <li><a href="https://www.meska.hu/s/narancssarga/co-568"><div class="color orange"></div>Narancssárga</a></li>
                        </ul>
                        -->
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ár <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="price-range">
                                <input type="text" class="range" name="range" value="">
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fizetési és szállítási lehetőségek <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.meska.hu/s/Mind/cc">
                                    <input type="checkbox" name="creditcard" value="creditcard">
                                    <i class="fa fa-cc-mastercard" aria-hidden="true"></i>Bankkártya
                                </a>
                            </li>
                            <li>
                                <a href="https://www.meska.hu/s/Mind/gc">
                                    <input type="checkbox" name="giftcard" value="giftcard">
                                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>Ajándékkártya
                                </a>
                            </li>
                            <li>
                                <a href="https://www.meska.hu/s/Mind/j">
                                    <input type="checkbox" name="jury" value="jury">
                                    <i class="fa fa-book fa-fw" aria-hidden="true"></i>Zsűrizett
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sort">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                                Rendezés <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu-2">
                                <li><a href="">
                                        <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
                                        Ár szerint csökkenő (legdrágább elől)
                                    </a></li>
                                <li><a href="">
                                        <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                        Ár szerint növekvő (legolcsóbb elől)
                                    </a></li>
                                <li><a href="">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                        Legújabbak elől
                                    </a></li>
                                <li><a href="">
                                        <i class="fa fa-eye"></i>
                                        Legnézettebbek elől
                                    </a></li>
                                <li><a href="">
                                        <i class="fa fa-heart"></i>
                                        Legnépszerűbbek elől
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-bar">
                        <form role="search" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get" class="search search-full">
                            <input name="utf8" type="hidden" value="✓">
                            <img src="https://image.flaticon.com/icons/svg/54/54554.svg">
                            <input type="search" name="query" id="search-bar" placeholder="Szabadszavas kereső..." autocomplete="off" aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="search-row-mobile">
                    <div class="search-row-mobile-trigger">Keresési szempontok</div>
                    <div class="search-row-mobile-content">
                        <div id="technika" class="btn-group">
                            <select class="technika">
                                <option value="00" disabled selected>Technika</option>
                                <option value="01">Baba-és bábkészítés</option>
                                <option value="02">Bőrművesség</option>
                                <option value="03">Csipkekészítés</option>
                                <option value="04">Csomózás</option>
                                <option value="05">Decoupage, szalvétatechnika</option>
                                <option value="06">Ékszerkészítés</option>
                                <option value="07">Famegmunkálás</option>
                                <option value="08">Fémmegmunkálás</option>
                                <option value="09">Festészet</option>
                                <option value="10">Festett tárgyak</option>
                                <option value="11">Foltberakás</option>
                                <option value="12">Fonás (csuhé, gyékény, stb.)</option>
                                <option value="13">Fotó, grafika, rajz, illusztráció</option>
                                <option value="14">Gyertya-, mécseskészítés</option>
                                <option value="15">Gyöngyfűzés</option>
                                <option value="16">Gyurma</option>
                                <option value="17">Hímzés</option>
                                <option value="18">Horgolás</option>
                                <option value="19">Kerámia</option>
                                <option value="20">Kovácsoltvas</option>
                                <option value="21">Kozmetikum készítés</option>
                                <option value="22">Kőfaragás</option>
                                <option value="23">Könyvkötés</option>
                                <option value="24">Kötés</option>
                                <option value="25">Mézeskalácssütés</option>
                                <option value="26">Mindenmás</option>
                                <option value="27">Mozaik</option>
                                <option value="28">Nemezelés</option>
                                <option value="29">Népi játék és hangszerkészítés</option>
                                <option value="30">Ötvös</option>
                                <option value="31">Papírművészet</option>
                                <option value="32">Patchwork, foltvarrás</option>
                                <option value="33">Selyemfestés</option>
                                <option value="34">Szappankészítés</option>
                                <option value="35">Szobrászat</option>
                                <option value="36">Szövés</option>
                                <option value="37">Tűzzománc</option>
                                <option value="38">Újrahasznosított alapanyagból készült termékek</option>
                                <option value="39">Üvegművészet</option>
                                <option value="40">Varrás</option>
                                <option value="41">Virágkötés</option>
                                <option value="42">Zsugorka</option>
                            </select>
                        </div>
                        <div id="szin"class="btn-group">
                            <select class="szin">
                                <option value="00" disabled selected>Szín</option>
                                <option value="01">Arany</option>
                                <option value="02">Áttetsző</option>
                                <option value="03">Barna</option>
                                <option value="04">Beige</option>
                                <option value="05">Bordó</option>
                                <option value="06">Bronz</option>
                                <option value="07">Ezüst</option>
                                <option value="08">Fehér</option>
                                <option value="09">Fekete</option>
                                <option value="10">Kék</option>
                                <option value="11">Lila</option>
                                <option value="12">Piros</option>
                                <option value="13">Réz</option>
                                <option value="14">Rózsaszín</option>
                                <option value="15">Sárga</option>
                                <option value="16">Pink/Magenta</option>
                                <option value="17">Szürke</option>
                                <option value="18">Türkiz</option>
                                <option value="19">Zöld</option>
                                <option value="20">Csíkos</option>
                                <option value="21">Kockás</option>
                                <option value="22">Mintás</option>
                                <option value="23">Pöttyös</option>
                                <option value="24">Tarka</option>
                                <option value="25">Narancssárga</option>
                            </select>

                            <!--
                            <ul id="szin" class="dropdown-menu">
                                <input type="text" placeholder="Keresés..." class="button-search">
                                <li><a href="https://www.meska.hu/s/arany/co-512"><div class="color gold"></div>Arany</a></li>
                                <li><a href="https://www.meska.hu/s/attetszo/co-513"><div class="color transparent"></div>Áttetsző</a></li>
                                <li><a href="https://www.meska.hu/s/barna/co-514"><div class="color brown"></div>Barna</a></li>
                                <li><a href="https://www.meska.hu/s/beige/co-515"><div class="color beige"></div>Beige</a></li>
                                <li><a href="https://www.meska.hu/s/bordo/co-516"><div class="color deep-red"></div>Bordó</a></li>
                                <li><a href="https://www.meska.hu/s/bronz/co-517"><div class="color bronze"></div>Bronz</a></li>
                                <li><a href="https://www.meska.hu/s/ezust/co-518"><div class="color silver"></div>Ezüst</a></li>
                                <li><a href="https://www.meska.hu/s/feher/co-519"><div class="color white"></div>Fehér</a></li>
                                <li><a href="https://www.meska.hu/s/fekete/co-520"><div class="color black"></div>Fekete</a></li>
                                <li><a href="https://www.meska.hu/s/kek/co-521"><div class="color blue"></div>Kék</a></li>
                                <li><a href="https://www.meska.hu/s/lila/co-522"><div class="color purple"></div>Lila</a></li>
                                <li><a href="https://www.meska.hu/s/piros/co-523"><div class="color red"></div>Piros</a></li>
                                <li><a href="https://www.meska.hu/s/rez/co-524"><div class="color copper"></div>Réz</a></li>
                                <li><a href="https://www.meska.hu/s/rozsaszin/co-525"><div class="color pink"></div>Rózsaszín</a></li>
                                <li><a href="https://www.meska.hu/s/sarga/co-526"><div class="color yellow"></div>Sárga</a></li>
                                <li><a href="https://www.meska.hu/s/pinkmagenta/co-791"><div class="color magenta"></div>Pink/Magenta</a></li>
                                <li><a href="https://www.meska.hu/s/szurke/co-527"><div class="color gray"></div>Szürke</a></li>
                                <li><a href="https://www.meska.hu/s/turkiz/co-528"><div class="color turquoise"></div>Türkiz</a></li>
                                <li><a href="https://www.meska.hu/s/zold/co-529"><div class="color green"></div>Zöld</a></li>
                                <li><a href="https://www.meska.hu/s/csikos/co-530"><div class="color stripe"></div>Csíkos</a></li>
                                <li><a href="https://www.meska.hu/s/kockas/co-531"><div class="color ska"></div>Kockás</a></li>
                                <li><a href="https://www.meska.hu/s/mintas/co-532"><div class="color pattern"></div>Mintás</a></li>
                                <li><a href="https://www.meska.hu/s/pottyos/co-533"><div class="color dot"></div>Pöttyös</a></li>
                                <li><a href="https://www.meska.hu/s/tarka/co-534"><div class="color tarka"></div>Tarka</a></li>
                                <li><a href="https://www.meska.hu/s/narancssarga/co-568"><div class="color orange"></div>Narancssárga</a></li>
                            </ul>
                            -->
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ár <span class="caret"></span>
                            </button>
                            <ul id="ar" class="dropdown-menu">
                                <li class="price-range">
                                    <input type="text" class="range" name="range" value="">
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Fizetési és szállítási lehetőségek <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="https://www.meska.hu/s/Mind/cc">
                                        <input type="checkbox" name="creditcard" value="creditcard">
                                        <i class="fa fa-cc-mastercard" aria-hidden="true"></i>Bankkártya
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.meska.hu/s/Mind/gc">
                                        <input type="checkbox" name="giftcard" value="giftcard">
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>Ajándékkártya
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.meska.hu/s/Mind/j">
                                        <input type="checkbox" name="jury" value="jury">
                                        <i class="fa fa-book fa-fw" aria-hidden="true"></i>Zsűrizett
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sort">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                                    Rendezés <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu-2">
                                    <li><a href="">
                                            <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
                                            Ár szerint csökkenő (legdrágább elől)
                                        </a></li>
                                    <li><a href="">
                                            <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                            Ár szerint növekvő (legolcsóbb elől)
                                        </a></li>
                                    <li><a href="">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                            Legújabbak elől
                                        </a></li>
                                    <li><a href="">
                                            <i class="fa fa-eye"></i>
                                            Legnézettebbek elől
                                        </a></li>
                                    <li><a href="">
                                            <i class="fa fa-heart"></i>
                                            Legnépszerűbbek elől
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-bar">
                            <form role="search" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get" class="search search-full">
                                <input name="utf8" type="hidden" value="✓">
                                <img src="https://image.flaticon.com/icons/svg/54/54554.svg">
                                <input type="search" name="query" id="search-bar" placeholder="Szabadszavas kereső..." autocomplete="off" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="keresesi-szempontok col-md-12 col-sm-12 col-xs-12 no-padding paddingtb10">
                    Keresési szempontok:
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                    <a href=""><div class="trashcan"></div></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="keywords">
                <b>Termékkategóriában népszerű kulcsszavak:</b>
                <span class="keyword"><a href="">kulcsszo1</a></span>,
                <span class="keyword"><a href="">kulcsszo2</a></span>,
                <span class="keyword"><a href="">kulcsszo3</a></span>,
                <span class="keyword"><a href="">kulcsszo4</a></span>,
                <span class="keyword"><a href="">kulcsszo5</a></span>,
                <span class="keyword"><a href="">kulcsszo6</a></span>,
                <span class="keyword"><a href="">kulcsszo7</a></span>,
                <span class="keyword"><a href="">kulcsszo8</a></span>,
                <span class="keyword"><a href="">kulcsszo9</a></span>,
                <span class="keyword"><a href="">kulcsszo10</a></span>,
                <span class="keyword"><a href="">kulcsszo11</a></span>,
                <span class="keyword"><a href="">kulcsszo12</a></span>,
                <span class="keyword"><a href="">kulcsszo13</a></span>,
                <span class="keyword"><a href="">kulcsszo14</a></span>,
                <span class="keyword"><a href="">kulcsszo15</a></span>,
                <span class="keyword"><a href="">kulcsszo16</a></span>,
                <span class="keyword"><a href="">kulcsszo17</a></span>,
                <span class="keyword"><a href="">kulcsszo18</a></span>,
                <span class="keyword"><a href="">kulcsszo19</a></span>,
                <span class="keyword"><a href="">kulcsszo20</a></span>,
            </div>
                <div class="row cont">
                    <?php
                    foreach ($products as $p){ ?>
                        <div class="products col-xs-6 col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5"
                            <?php if ($p === end($products)) { ?>
                                style="display: none;"
                            <?php } ?>
                            >
                            <div class="product-box" onclick="location.href='#';">
                                <div class="image-wrap">
                                    <img class="product-image" alt="<?=$p['image_alt']?>" title="<?=$p['image_title']?>" src="<?=$p['image']?>">
                                    <img src="img/plus.svg" class="icon">
                                </div>
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
                                    <a href="https://meska.hu/t<?=$p['id']?>">
                                        <div class="description"><?=$p['product_name']?></div>
                                    </a>
                                    <div class="price"><?=productPrice($p['price'], '.')?></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="load-more col-xs-6 col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5">
                        <div class="load-more-box">
                            <div class="gomb">+</div>
                            <div class="text">Több termék betöltése</div>
                        </div>
                    </div>

                </div>
                <div class="show-more">Több termék megjelenítése</div>
                <div class="category-desc">
                    <div class="title">Termékkategória leírása</div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>