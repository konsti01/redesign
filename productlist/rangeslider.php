<html>
<head>

    <link rel="stylesheet" type="text/css" href="ion.rangeSlider-2.1.7/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="ion.rangeSlider-2.1.7/css/ion.rangeSlider.skinFlat.css">
</head>
<body>
    <input type="text" id="range" name="range" value="">

    <script type="text/javascript" src="ion.rangeSlider-2.1.7/js/vendor/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="ion.rangeSlider-2.1.7/js/ion-rangeSlider/ion.rangeSlider.js"></script>

    <script>

        $(function () {

            $("#range").ionRangeSlider({
                hide_min_max: true,
                keyboard: true,
                min: 0,
                max: 5000,
                from: 1000,
                to: 4000,
                type: 'double',
                step: 1,
                prefix: "$",
                grid: true
            });

        });
    </script>
</body>
</html>