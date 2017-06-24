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
                        <div class="any">akármi</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="downside">lent</div>
            </div>
        </div>
    </div>

<?php include_once('../footer.php'); ?>