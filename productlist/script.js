//SPECIFY VISIBILITY
$('#search-bar').keyup(function(){
    if($(this).val().length){
        $('.search-tags').show();

        $('.keywords').addClass('gap');
    }
    else{
        $('.search-tags').hide();

        $('.keywords').removeClass('gap');

    }
});

//SCROLL SPECIFY
$(window).scroll(function() {
 var scroll = $(window).scrollTop();

 if (scroll >= 1) {
     $('.search-row .sort').removeClass('pushed');

     $('.search-row .btn-group .btn').addClass('btn-mini');
     $('.select2-container .select2-selection--single').addClass('select2-single-mini');
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').addClass('select2-rendered-mini');
     $('.search-bar').addClass('search-bar-mini');
     $('.search-bar .fa-search').addClass('search-bar-i-mini');
     $('.search-row .sort').addClass('sort-mini');
 }else {
     $('.search-row .sort').addClass('pushed');

     $('.search-row .btn-group .btn').removeClass('btn-mini');
     $('.select2-container .select2-selection--single').removeClass('select2-single-mini');
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').removeClass('select2-rendered-mini');
     $('.search-bar').removeClass('search-bar-mini');
     $('.search-bar .fa-search').removeClass('search-bar-i-mini');
     $('.search-row .sort').removeClass('sort-mini');
 }
});

//LOAD MORE PROD
function getProductsJson() {
    $.ajax({
        dataType: 'json',
        method: 'POST',
        url: '/productlist/data.php',
        data: {json: 1},
        success: function(data){
            appendProducts(data);
        },
        error: function(){
            alert('error');
        }
    });
}

function appendProducts(products) {
    var template = $('#productBoxTemplate').html();
    Mustache.parse(template);
    var rendered = Mustache.render(template, {products: products});
    $('#product-wrapper').append(rendered);
}

$(document).ready(function() {
    //SELECT2
    $('.technic').select2();
    $('.colors').select2({
        data: color_data,
        escapeMarkup: function(markup) {
            return markup;
        },
        templateResult: function(data) {
            if (data.select2visible != undefined){
                if (data.svgColor != undefined) {
                    if (['dot', 'multicolored', 'pattern', 'ska', 'stripe'].indexOf(data.svgColor) >=0){
                        var svg = '<img style="float: right; margin-top: 3px; width: 20px; height: 20px;" src="https://assets.meska.hu/images/productlist/'+data.svgColor+'.svg"/>';
                    } else {
                        var svg = '<svg style="float: right; margin-top: 3px; width: 20px; height: 20px;" xmlns="http://www.w3.org/2000/svg" version="1.1" baseProfile="full" width="20px" height="20px"><rect width="100%" height="100%" fill="' + data.svgColor + '" stroke="#666666" stroke-width="1"/></svg>';
                    }

                    return data.html+svg;
                }
                return data.text;
            }
        },
        templateSelection: function(data) {
            return data.text;
        }
    });

    //LOAD MORE PROD BUTTON
    $('.show-more').click(getProductsJson);

    //RESPONSE BOX DISPLAY
    //RESPONSE BOX
    $( ".response" ).click(function() {
        $('.response-box').slideToggle();
    });

    $( ".response-box #close" ).click(function() {
        $('.response-box').slideToggle();
    });
});