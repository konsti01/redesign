<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AJAX test</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>
</head>

<body>
<a id="tester" style="cursor: pointer;">DoTest</a>

<div id="target">Loading...</div>

</body>

<script id="template" type="x-tmpl-mustache">
{{#products}}
    {{ product_name }} <br>
{{/products}}
</script>

<script type="text/javascript">

    function getJson() {
        $.ajax({
            dataType: 'json',
            method: 'POST',
            url: '/productlist/data.php',
            data: {json: 1},
            success: function(data){
                loadProducts(data);
                console.log(data);
            },
            error: function(){
                alert('error');
            }
        });
    }
    $('#tester').click(getJson);

    function loadProducts(products) {
        var template = $('#template').html();
        Mustache.parse(template);   // optional, speeds up future uses
        var rendered = Mustache.render(template, {products: products});
        $('#target').html(rendered);
    }

</script>
</html>