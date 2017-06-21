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
                    <div class="left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">jobb fent bal</div>
                    <div class="right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">jobb fent jobb</div>
                    <div class="clearfix"></div>
                </div>
                <div class="downside">jobb lent</div>
            </div>
        </div>
    </div>

<?php include_once('../footer.php'); ?>