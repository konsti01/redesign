<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AJAX test</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
</head>

<body>
<a id="tester" style="cursor: pointer;">DoTest</a>
</body>
<script type="text/javascript">

    function getJson() {
        $.ajax({
            dataType: 'json',
            method: 'POST',
            url: '/productlist/data.php',
            data: {json: 1},
            success: function(data){
                console.log(data);
            },
            error: function(){
                alert('error');
            }
        });
    }
    $('#tester').click(getJson);

</script>
</html>