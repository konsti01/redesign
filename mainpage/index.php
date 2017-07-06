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



<?php include_once('../footer.php'); ?>