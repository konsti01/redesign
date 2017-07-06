//BANNERHELY ÉS WIDGET FIX
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var bottom = $(window).scrollTop() + $(window).height() == $(document).height();

    if(scroll < 700){
        $(".bannerhely-fixed").removeClass("bannerhely-fixed").addClass("bannerhely"),
            $(".widget-fixed").removeClass("widget-fixed").addClass("widget");
    }
    if (scroll >= 700 && bottom-100) {
        $(".bannerhely").removeClass("bannerhely").addClass("bannerhely-fixed"),
            $(".widget").removeClass("widget").addClass("widget-fixed"),
            $(".bannerhely-fixed-bottom").removeClass("bannerhely-fixed-bottom").addClass("bannerhely-fixed"),
            $(".widget-fixed-bottom").removeClass("widget-fixed-bottom").addClass("widget-fixed");
    }
    if(bottom){
        $(".bannerhely-fixed").removeClass("bannerhely-fixed").addClass("bannerhely-fixed-bottom"),
            $(".widget-fixed").removeClass("widget-fixed").addClass("widget-fixed-bottom");
    }
});

//SPECIFY VISIBILITY
$('input[name=query]').keyup(function(){
    if($(this).val().length){
        $('.keresesi-szempontok').show();

        $('.cont').css('margin-top', '270px'),
        $('.keywords').css('margin', '220px 5px 0px 5px');
    }
    else{
        $('.keresesi-szempontok').hide();

        $('.cont').css('margin-top', '230px')
        $('.keywords').css('margin', '180px 5px 0px 5px');

    }
});

//SCROLL SPECIFY
$(window).scroll(function() {
 var scroll = $(window).scrollTop();

 if (scroll >= 1) {
     $('.btn-group .btn').css('padding', '3px 6px'),
     $('.btn-group .btn').css('font-size', '12px'),
     $('.btn-group .btn').css('transition', 'padding 200ms'),
     $('.btn-group .btn').css('transition', 'font-size 200ms'),
     $('.select2-container .select2-selection--single').css('height', '25px'),
     $('.select2-container .select2-selection--single').css('transition', 'height 200ms'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('line-height', '25px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('font-size', '12px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('transition', 'line-height 200ms'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('transition', 'font-size 200ms'),
     $('.search-bar').css('font-size', '11px'),
     $('.search-bar').css('padding', '3px 10px'),
     $('.search-bar img').css('width', '15px'),
     $('.search-bar').css('transition', 'padding 200ms');
     $('.search-bar img').css('transition', 'width 200ms');
 }else{
     $('.btn-group .btn').css('padding', '3px 12px'),
     $('.btn-group .btn').css('font-size', '14px'),
     $('.select2-container .select2-selection--single').css('height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('line-height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('font-size', '14px'),
     $('.search-bar').css('font-size', '14px'),
     $('.search-bar').css('padding', '2px 10px'),
     $('.search-bar img').css('width', '20px');
 }
 });

//NAV SCROLL TO TOP
function topFunction() {
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}

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
    $(".technika").select2();
    $(".szin").select2();

    // LOAD MORE PROD
    $("#load-more-products").click(getProductsJson);
});

