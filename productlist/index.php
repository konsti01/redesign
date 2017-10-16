<?php include_once('../header.php'); ?>
<?php include_once('data.php'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="/assets/css/topnav.css">
<link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
<link rel="stylesheet" type="text/css" href="productlist.css">
<link rel="stylesheet" type="text/css" href="productlist_responsive.css">

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
                    <li class="active"><a href="https://www.meska.hu/s/Mind"></a><span class="title">Termékkategória</span></li>
                </ol>
                <div class="search-row-mobile" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0"><a><i class="far fa-search"></i>További keresési szempontok</a></h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                                <div id="technic" class="btn-group">
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
                                <div id="color" class="btn-group">
                                    <select class="colors">
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
                                </div>
                                <div id="price" class="btn-group">
                                    <button type="button" id="price" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ár <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="price-range">
                                            <input type="text" class="range" name="range" value="">
                                        </li>
                                    </ul>
                                </div>
                                <div id="misc" class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Egyéb <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="https://www.meska.hu/s/Mind/cc">
                                                <input type="checkbox" name="creditcard" value="creditcard">
                                                <i class="far fa-credit-card"></i>Bankkártya
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.meska.hu/s/Mind/gc">
                                                <input type="checkbox" name="giftcard" value="giftcard">
                                                <i class="far fa-credit-card-blank" aria-hidden="true"></i>Ajándékkártya
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.meska.hu/s/Mind/j">
                                                <input type="checkbox" name="jury" value="jury">
                                                <i class="far fa-star fa-fw" aria-hidden="true"></i>Zsűrizett
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sort">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="far fa-sort-amount-down" aria-hidden="true"></i>
                                            Rendezés <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="">
                                                    <i class="far fa-home" aria-hidden="true"></i>
                                                    Meska.hu sorrend
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="far fa-heart"></i>
                                                    Legnépszerűbb
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="far fa-recycle" aria-hidden="true"></i>
                                                    Legújabb
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="far fa-eye"></i>
                                                    Legnézettebb
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="far fa-star" aria-hidden="true"></i>
                                                    Kiemelt
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="far fa-arrow-to-bottom" aria-hidden="true"></i>
                                                    Ár szerint csökkenő
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="far fa-arrow-to-top" aria-hidden="true"></i>
                                                    Ár szerint növekvő
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-row">
                    <div id="technic" class="btn-group">
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
                    <div id="color" class="btn-group">
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
                    </div>
                    <div id="price" class="btn-group">
                        <button type="button" id="price" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ár <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="price-range">
                                <input type="text" class="range" name="range" value="">
                            </li>
                        </ul>
                    </div>
                    <div id="misc" class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Egyéb <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.meska.hu/s/Mind/cc">
                                    <input type="checkbox" name="creditcard" value="creditcard">
                                    <i class="far fa-credit-card"></i>Bankkártya
                                </a>
                            </li>
                            <li>
                                <a href="https://www.meska.hu/s/Mind/gc">
                                    <input type="checkbox" name="giftcard" value="giftcard">
                                    <i class="far fa-credit-card-blank" aria-hidden="true"></i>Ajándékkártya
                                </a>
                            </li>
                            <li>
                                <a href="https://www.meska.hu/s/Mind/j">
                                    <input type="checkbox" name="jury" value="jury">
                                    <i class="far fa-star fa-fw" aria-hidden="true"></i>Zsűrizett
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-bar">
                        <form role="search" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get" class="search search-full">
                            <input name="utf8" type="hidden" value="✓">
                            <i class="far fa-search" aria-hidden="true"></i>
                            <input type="search" name="query" id="search-bar" placeholder="Szabadszavas kereső..." autocomplete="off" aria-label="Search">
                        </form>
                    </div>
                    <div class="sort pushed">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-sort-amount-down" aria-hidden="true"></i>
                                Rendezés <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="">
                                        <i class="far fa-home" aria-hidden="true"></i>
                                        Meska.hu sorrend
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-heart"></i>
                                        Legnépszerűbb
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-recycle" aria-hidden="true"></i>
                                        Legújabb
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-eye"></i>
                                        Legnézettebb
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-star" aria-hidden="true"></i>
                                        Kiemelt
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-arrow-to-bottom" aria-hidden="true"></i>
                                        Ár szerint csökkenő
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-arrow-to-top" aria-hidden="true"></i>
                                        Ár szerint növekvő
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="search-tags col-md-12 col-sm-12 col-xs-12 no-padding paddingtb10">
                    Keresési szempontok:
                    <span class="tag">szempont 1 <a href=""><i class="far fa-times fa-fw" aria-hidden="true"></i></a></span>
                    <span class="tag">szempont 1 <a href=""><i class="far fa-times fa-fw" aria-hidden="true"></i></a></span>
                    <span class="tag">szempont 1 <a href=""><i class="far fa-times fa-fw" aria-hidden="true"></i></a></span>
                    <span class="tag">szempont 1 <a href=""><i class="far fa-times fa-fw" aria-hidden="true"></i></a></span>
                    <span class="tag">szempont 1 <a href=""><i class="far fa-times fa-fw" aria-hidden="true"></i></a></span>
                    <a href=""><div class="trashcan"><i class="far fa-trash-alt fa-fw" aria-hidden="true"></i></div></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="keywords">
                <div class="keywords-box">
                    <b>Kategóriában népszerű kulcsszavak:</b>
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

            <div id="load-more-products" class="show-more">Több termék megjelenítése</div>
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
<script id="productBoxTemplate" type="text/html">
    {{# products }}
    <div class="products col-xs-6-custom col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5">
        <div class="product-box">
            <a href="https://www.meska.hu/t{{ id }}" class="image-wrap">
                <img class="product-image" alt="{{ image_alt }}" title="{{ image_title }}" src="{{ image }}">
            </a>
            <div class="seller-pic">
                {{# avatar }}
                <a href="https://{{ shop_name }}.meska.hu">
                    <img src="https://www.meska.hu/img/avatar/thumbnail/{{ avatar }}">
                </a>
                {{/ avatar }}
                {{^ avatar }}
                <a href="https://{{ shop_name }}.meska.hu">
                    <img src="https://www.meska.hu/images/no_avatar.jpg">
                </a>
                {{/ avatar }}
            </div>
            <div class="product-description">
                <a href="https://{{ shop_name }}.meska.hu">
                    <div class="seller">{{ shop_name }}</div>
                </a>
                <a href="https://www.meska.hu/t{{ id }}">
                    <div class="description">{{ product_name }}</div>
                </a>
            </div>
            <div class="product-price">
                <div class="price">{{ formatted_price }}</div>
                <div class="basket">Kosárba »</div>
                <div class="basket-mobile"><i class="far fa-shopping-cart" aria-hidden="true"></i></div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    {{/products}}
</script>
<div class="ask">
    <div class="response-box">
        <i class="far fa-times" id="close"></i>
        <br>
        <p>Köszönjük, ha megírod észrevételedet az új listaoldalról. Ez még csak teszt verzió, örömmel fogadunk minden pozitív és negatív észrevételt :)</p>
        <form>
            <textarea></textarea><br>
            <input type="submit" name="submit" value="Küldés">
        </form>
    </div>
    <a class="response">
        <span>Visszajelzés</span>
        <i class="far fa-comment-alt"></i>
    </a>
    <a class="back" href="https://www.meska.hu/">
        <span>Vissza a régi listaoldalra!</span>
        <i class="far fa-undo"></i>
    </a>
</div>

<?php include_once('../footer.php'); ?>

<!-- LocalJS -->
<script src="script.js"></script>