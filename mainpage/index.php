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
?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/mainpage/style.css">
<link rel="stylesheet" type="text/css" href="/mainpage/responsive.css">

<!-- FONTS -->
<link rel="stylesheet" type="text/css" href="/mainpage/fonts.css">

<!-- BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="/mainpage/BootstrapXL.css">

    <div class="row">
        <div class="row-wrapper">
            <!-- LEFT COL -->
            <div class="row-left">
                bal
            </div>
            <!-- RIGHT COL -->
            <div class="row-right">
                <div class="upside">
                    <div class="left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="first">
                            <img src="img/static.jpg">
                        </div>
                        <div class="second">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <div class="clearfix"></div>
                        </div>
                        <div class="third">
                            <div class="headline">Loren Ipsum</div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.
                            </div>
                            <div class="button">Button</div>
                        </div>
                        <div class="fourth">
                            <div class="headline">Loren Ipsum</div>
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                        </div>
                    </div>
                    <div class="right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="first">
                            <div class="headline">Loren Ipsum</div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.
                            </div>
                            <div class="list">
                                <ul>
                                    <li>Készítette: XY</li>
                                    <li>Készítette: XY</li>
                                    <li>Készítette: XY</li>
                                    <li>Készítette: XY</li>
                                </ul>
                            </div>
                        </div>
                        <div class="second">
                            <div class="price">A termék ára: 2 900 .-Ft</div>
                            <a href="">Szállítási díj, feltételek</a>
                            <div class="button">Button</div>
                        </div>
                        <div class="third">
                            <a href="">kedvencek közé teszem</a>
                            <a href="">elküldöm a barátomnak</a>
                            <a href="">kinyomtatom az oldalt (QR kód)</a>
                            <div class="social">
                                <div class="social-fb">FB</div>
                                <div class="social-tw">TW</div>
                                <div class="social-in">IN</div>
                                <div class="social-ig">IG</div>
                                <div class="social-gp">G+</div>
                                <div class="social-pi">PI</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="downside">
                    <div class="maker-info">
                        <div class="headline">Készítő adatai</div>
                        <div class="maker-info-wrap">
                            <div class="col-1">
                                <div class="maker-pic-wrap">
                                    <img src="img/static.jpg">
                                </div>
                                <div class="maker-info-wrap">
                                    <div class="name">Készítő neve</div>
                                    <a href="">Kedvencek közé teszem</a>
                                    <div class="reg">Regisztrált: 2000. 00. 00.</div>
                                    <div class="button">Button</div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="headline">Készítő értékelései</div>
                                <div class="ratings-wrapper">
                                    <div class="rating-col">
                                        <div class="rating">Értékelés: 100% (3db)</div>
                                        <div class="quote">
                                            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </div>
                                        <div class="rated-by">
                                            <img src="img/static.jpg">
                                            <span class="name">jano84</span>
                                        </div>
                                    </div>
                                    <div class="rating-col">
                                        <div class="rating">Értékelés: 100% (3db)</div>
                                        <div class="quote">
                                            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </div>
                                        <div class="rated-by">
                                            <img src="img/static.jpg">
                                            <span class="name">jano84</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="maker-products">
                        <div class="headline">Készítő termékei</div>
                        <div class="product-quantity">termékeinek száma: 13 db</div>
                        <div class="product-pics-wrap">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <img src="img/static.jpg">
                            <div class="clearfix"></div>
                        </div>
                        <a href="">Készítő összes terméke >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once('../footer.php'); ?>