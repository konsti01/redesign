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

function cut($s, $lenght, $append) {
    if (mb_strlen($s, 'utf8') >= $lenght) {
        return str_replace("\\", "", mb_substr($s, 0, $lenght, 'utf8') . $append);
    }
    return $s;
}

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
                <a href="#" class="sidebar-trigger">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span>Kategóriák</span>
                </a>
                <div class="sidebar-content col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Állatfelszerelések" title="Állatfelszerelések">
                    <span>Állatfelszerelések</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Baba-mama-gyerek" title="Baba-mama-gyerek">
                    <span>Baba-mama-gyerek</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Bútor" title="Bútor">
                    <span>Bútor</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Dekoráció" title="Dekoráció">
                    <span>Dekoráció</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Ékszer, óra" title="Ékszer, óra">
                    <span>Ékszer, óra</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Esküvő" title="Esküvő">
                    <span>Esküvő</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Férfiaknak" title="Férfiaknak">
                    <span>Férfiaknak</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Játék" title="Játék">
                    <span>Játék</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Képzőművészet" title="Képzőművészet">
                    <span>Képzőművészet</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Konyhafelszerelés" title="Konyhafelszerelés">
                    <span>Konyhafelszerelés</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Magyar motívumokkal" title="Magyar motívumokkal">
                    <span>Magyar motívumokkal</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Mindenmás" title="Mindenmás">
                    <span>Mindenmás</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Naptár, képeslap, album" title="Naptár, képeslap, album">
                    <span>Naptár, képeslap, album</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Otthon, lakberendezés" title="Otthon, lakberendezés">
                    <span>Otthon, lakberendezés</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Ruha, divat, cipő" title="Ruha, divat, cipő">
                    <span>Ruha, divat, cipő</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Szépségápolás" title="Szépségápolás">
                    <span>Szépségápolás</span>
                </a>
                <a href="#">
                    <img src="/productlist/img/baba-mama-gyerek.svg" alt="Táska" title="Táska">
                    <span>Táska</span>
                </a>
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
                        </a></li>
                    <li class="active"><a href="https://www.meska.hu/s/Mind"></a></li>
                </ol>
                <h1 class="title">Termékkategória</h1><br>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Technika <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <input type="text" placeholder="Keresés..." class="button-search">
                        <li>
                            <a href="https://www.meska.hu/s/babaes-babkeszites/t-472">
                                Baba-és bábkészítés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/bormuvesseg/t-473">
                                Bőrművesség </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/csipkekeszites/t-474">
                                Csipkekészítés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/csomozas/t-475">
                                Csomózás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/decoupage-szalvetatechnika/t-476">
                                Decoupage, szalvétatechnika </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/ekszerkeszites/t-477">
                                Ékszerkészítés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/famegmunkalas/t-478">
                                Famegmunkálás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/femmegmunkalas/t-479">
                                Fémmegmunkálás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/festeszet/t-480">
                                Festészet </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/festett-targyak/t-481">
                                Festett tárgyak </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/foltberakas/t-673">
                                Foltberakás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/fonas-csuhe-gyekeny-stb/t-482">
                                Fonás (csuhé, gyékény, stb.) </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/foto-grafika-rajz-illusztracio/t-483">
                                Fotó, grafika, rajz, illusztráció </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/gyertya-mecseskeszites/t-484">
                                Gyertya-, mécseskészítés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/gyongyfuzes/t-485">
                                Gyöngyfűzés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/gyurma/t-486">
                                Gyurma </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/himzes/t-487">
                                Hímzés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/horgolas/t-488">
                                Horgolás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/keramia/t-489">
                                Kerámia </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/kovacsoltvas/t-678">
                                Kovácsoltvas </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/kozmetikum-keszites/t-758">
                                Kozmetikum készítés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/kofaragas/t-490">
                                Kőfaragás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/konyvkotes/t-671">
                                Könyvkötés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/kotes/t-491">
                                Kötés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/mezeskalacssutes/t-492">
                                Mézeskalácssütés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/mindenmas/t-493">
                                Mindenmás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/mozaik/t-750">
                                Mozaik </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/nemezeles/t-494">
                                Nemezelés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/nepi-jatek-es-hangszerkeszites/t-495">
                                Népi játék és hangszerkészítés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/otvos/t-496">
                                Ötvös </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/papirmuveszet/t-497">
                                Papírművészet </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/patchwork-foltvarras/t-498">
                                Patchwork, foltvarrás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/selyemfestes/t-499">
                                Selyemfestés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/szappankeszites/t-500">
                                Szappankészítés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/szobraszat/t-501">
                                Szobrászat </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/szoves/t-502">
                                Szövés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/tuzzomanc/t-503">
                                Tűzzománc </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/ujrahasznositott-alapanyagbol-keszult-termekek/t-504">
                                Újrahasznosított alapanyagból készült termékek </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/uvegmuveszet/t-505">
                                Üvegművészet </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/varras/t-506">
                                Varrás </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/viragkotes/t-507">
                                Virágkötés </a>
                        </li>
                        <li>
                            <a href="https://www.meska.hu/s/zsugorka/t-569">
                                Zsugorka </a>
                        </li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Szín <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <input type="text" placeholder="Keresés..." class="button-search">
                        <li><a href="https://www.meska.hu/s/arany/co-512">Arany <div class="color gold"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/attetszo/co-513">Áttetsző <div class="color transparent"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/barna/co-514">Barna <div class="color brown"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/beige/co-515">Beige <div class="color beige"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/bordo/co-516">Bordó <div class="color deep-red"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/bronz/co-517">Bronz <div class="color bronze"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/ezust/co-518">Ezüst <div class="color silver"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/feher/co-519">Fehér <div class="color white"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/fekete/co-520">Fekete <div class="color black"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/kek/co-521">Kék <div class="color blue"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/lila/co-522">Lila <div class="color purple"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/piros/co-523">Piros <div class="color red"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/rez/co-524">Réz <div class="color copper"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/rozsaszin/co-525">Rózsaszín <div class="color pink"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/sarga/co-526">Sárga <div class="color yellow"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/pinkmagenta/co-791">Pink/Magenta <div class="color magenta"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/szurke/co-527">Szürke <div class="color gray"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/turkiz/co-528">Türkiz <div class="color turquoise"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/zold/co-529">Zöld <div class="color green"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/csikos/co-530">Csíkos <div class="color stripe"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/kockas/co-531">Kockás <div class="color ska"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/mintas/co-532">Mintás <div class="color pattern"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/pottyos/co-533">Pöttyös <div class="color dot"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/tarka/co-534">Tarka <div class="color tarka"></div> </a></li>
                        <li><a href="https://www.meska.hu/s/narancssarga/co-568">Narancssárga <div class="color orange"></div> </a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ár <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.meska.hu/s/Mind/0-1999">0 - 1999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/2000-3999">2000 - 3999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/4000-5999">4000 - 5999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/6000-7999">6000 - 7999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/8000-9999">8000 - 9999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/10000-11999">10000 - 11999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/12000-13999">12000 - 13999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/14000-15999">14000 - 15999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/16000-17999">16000 - 17999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/18000-19999">18000 - 19999</a></li>
                        <li><a href="https://www.meska.hu/s/Mind/20000">20000 - </a></li>
                    </ul>
                </div>
                <div class="btn-group"></div>
                <div class="checkbox btn-group">
                    <label>
                        <input type="checkbox" value="cc" onclick="window.location.href='https://www.meska.hu/s/Mind/cc'"> bankkártya
                    </label>
                </div>
                <div class="btn-group"></div>
                <div class="checkbox btn-group">
                    <label>
                        <input type="checkbox" value="gc" onclick="window.location.href='https://www.meska.hu/s/Mind/gc'"> ajándékkártya
                    </label>
                </div>
                <div class="btn-group"></div>
                <div class="checkbox btn-group">
                    <label>
                        <input type="checkbox" value="j" onclick="window.location.href='https://www.meska.hu/s/Mind/om'"> saját alapanyag
                    </label>
                </div>
                <div class="btn-group"></div>
                <div class="checkbox btn-group">
                    <label>
                        <input type="checkbox" value="j" onclick="window.location.href='https://www.meska.hu/s/Mind/j'"> zsűrizett
                    </label>
                </div>
                <div class="keresesi-szempontok col-md-12 col-sm-12 col-xs-12 no-padding paddingtb10">
                    Keresési szempontok:
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                    <span class="szempont">szempont 1 <a href=""><img src="img/close.png"></a></span>
                        <a class="color-red pull-right" href="https://www.meska.hu/s/Mind">Keresési szempontok törlése
                        <i class="fa fa-close" aria-hidden="true"></i></a>
                </div>
                <div class="search-bar">
                    <form role="search" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get" class="search search-full">
                        <input name="utf8" type="hidden" value="✓">
                        <img src="https://image.flaticon.com/icons/svg/54/54554.svg">
                        <input type="search" name="query" id="search-bar" placeholder="Szabadszavas kereső..." autocomplete="off" aria-label="Search">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
                <div class="row" id="cont">
                    <div class="kereso">
                        <div class="keywords">
                            <b>Termékkategóriában népszerű kulcsszavak:</b>
                            <span class="keyword">kulcsszo1</span>,
                            <span class="keyword">kulcsszo2</span>,
                            <span class="keyword">kulcsszo3</span>,
                            <span class="keyword">kulcsszo4</span>,
                            <span class="keyword">kulcsszo5</span>,
                            <span class="keyword">kulcsszo6</span>,
                            <span class="keyword">kulcsszo7</span>,
                            <span class="keyword">kulcsszo8</span>,
                            <span class="keyword">kulcsszo9</span>,
                            <span class="keyword">kulcsszo10</span>,
                            <span class="keyword">kulcsszo11</span>,
                            <span class="keyword">kulcsszo12</span>,
                            <span class="keyword">kulcsszo13</span>,
                            <span class="keyword">kulcsszo14</span>,
                            <span class="keyword">kulcsszo15</span>,
                            <span class="keyword">kulcsszo16</span>,
                            <span class="keyword">kulcsszo17</span>,
                            <span class="keyword">kulcsszo18</span>,
                            <span class="keyword">kulcsszo19</span>,
                            <span class="keyword">kulcsszo20</span>,
                        </div>
                        <div class="sort">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Rendezés <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="">Szempont 1</a></li>
                                    <li><a href="">Szempont 2</a></li>
                                    <li><a href="">Szempont 3</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php
                    foreach ($products as $p){ ?>
                        <div class="products col-xs-6 col-sm-4-custom col-md-3-custom col-lg-2-custom col-xl-2-custom padding5">
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
                                        <div class="description"><?=cut($p['product_name'], 35, '...')?></div>
                                    </a>
                                    <div class="price"><?=productPrice($p['price'], '.')?></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    <?php } ?>
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