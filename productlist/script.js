//BANNERHELY ÉS WIDGET FIX
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var bottom = $(window).scrollTop() + $(window).height() > $(document).height() - 220;

    if(scroll < 700){
        $(".bannerhely-fixed-pl").removeClass("bannerhely-fixed-pl").addClass("bannerhely-pl"),
        $(".widget-fixed-pl").removeClass("widget-fixed-pl").addClass("widget-pl");

        $(".bannerhely-fixed-mp").removeClass("bannerhely-fixed-mp").addClass("bannerhely-mp"),
        $(".widget-fixed-mp").removeClass("widget-fixed-mp").addClass("widget-mp");
    }
    if (scroll >= 700) {
        $(".bannerhely-pl").removeClass("bannerhely-pl").addClass("bannerhely-fixed-pl"),
        $(".widget-pl").removeClass("widget-pl").addClass("widget-fixed-pl"),
        $(".bannerhely-fixed-bottom-pl").removeClass("bannerhely-fixed-bottom-pl").addClass("bannerhely-fixed-pl"),
        $(".widget-fixed-bottom-pl").removeClass("widget-fixed-bottom-pl").addClass("widget-fixed-pl");

        $(".bannerhely-mp").removeClass("bannerhely-mp").addClass("bannerhely-fixed-mp"),
        $(".widget-mp").removeClass("widget-mp").addClass("widget-fixed-mp"),
        $(".bannerhely-fixed-bottom-mp").removeClass("bannerhely-fixed-bottom-mp").addClass("bannerhely-fixed-mp"),
        $(".widget-fixed-bottom-mp").removeClass("widget-fixed-bottom-mp").addClass("widget-fixed-mp");
    }
    if(bottom){
        $(".bannerhely-fixed-pl").removeClass("bannerhely-fixed-pl", 1000).addClass("bannerhely-fixed-bottom-pl", 1000),
        $(".widget-fixed-pl").removeClass("widget-fixed-pl", 1000).addClass("widget-fixed-bottom-pl", 1000);

        $(".bannerhely-fixed-mp").removeClass("bannerhely-fixed-mp", 1000).addClass("bannerhely-fixed-bottom-mp", 1000),
        $(".widget-fixed-mp").removeClass("widget-fixed-mp", 1000).addClass("widget-fixed-bottom-mp", 1000);
    }
});

//SPECIFY VISIBILITY
$('input[name=query]').keyup(function(){
    if($(this).val().length){
        $('.keresesi-szempontok').show();

        $('.cont').css('margin-top', '170px'),
        $('.keywords').css('margin', '150px 5px 0px 5px');
    }
    else{
        $('.keresesi-szempontok').hide();

        $('.cont').css('margin-top', '130px')
        $('.keywords').css('margin', '100px 5px 0px 5px');

    }
});

//SCROLL SPECIFY
$(window).scroll(function() {
 var scroll = $(window).scrollTop();

 if (scroll >= 1) {
     $('.search-row .btn-group .btn').css('padding', '3px 6px'),
     $('.search-row .btn-group .btn').css('font-size', '12px'),
     $('.search-row .btn-group .btn').css('height', '25px'),
     $('.search-row .btn-group .btn').css('transition', 'padding 200ms'),
     $('.search-row .btn-group .btn').css('transition', 'font-size 200ms'),
     $('.select2-container .select2-selection--single').css('height', '25px'),
     $('.select2-container .select2-selection--single').css('transition', 'height 200ms'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('line-height', '25px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('font-size', '12px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('transition', 'line-height 200ms'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('transition', 'font-size 200ms'),
     $('.search-bar').css('font-size', '11px'),
     $('.search-bar').css('padding', '3px 10px'),
     $('.search-bar').css('height', '25px'),
     $('.search-bar img').css('width', '15px'),
     $('.search-bar').css('transition', 'padding 200ms'),
     $('.search-bar img').css('transition', 'width 200ms'),
     $('.search-row .sort').css('display', 'inline-block');
 }else{
     $('.search-row .btn-group .btn').css('padding', '3px 12px'),
     $('.search-row .btn-group .btn').css('font-size', '14px'),
     $('.search-row .btn-group .btn').css('height', '28px'),
     $('.select2-container .select2-selection--single').css('height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('line-height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('font-size', '14px'),
     $('.search-bar').css('font-size', '14px'),
     $('.search-bar').css('padding', '2px 10px'),
     $('.search-bar').css('height', '28px'),
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
    $('.szin').select2({
        containerCssClass : "colors-wrap",
        dropdownCssClass: 'colors'
    });

    //LOAD MORE PROD BUTTON
    $('.show-more').click(getProductsJson);

    //RESPONSE BOX DISPLAY
    $( ".response" ).click(function() {
            $('.response-box').css('display', 'block');

            $( ".fa-times" ).click(function() {
                $('.response-box').css('display', 'none');
            });
        });

    //SIDEBAR DISPLAY
    var $window = $(window);
    var $rowleft = $('.row-left');
    var $rowright = $('.row-right');

    function checkWidth() {
        var windowsize = $window.width();

        if(windowsize > 1000) {
            $rowleft.css('position', 'absolute'),
            $rowleft.css('left', '250px'),
            $rowleft.css('transition', 'left 1s');

            $rowright.click(function(){
                $rowleft.css('position', 'absolute'),
                $rowleft.css('left', '250px'),
                $rowleft.css('transition', 'left 1s');
            });
        }
        else{
            $rowleft.css('position', 'absolute'),
            $rowleft.css('left', '41px'),
            $rowleft.css('transition', 'left 1s');

            $rowleft.click(function(){
                $rowleft.css('position', 'absolute'),
                $rowleft.css('left', '250px'),
                $rowleft.css('transition', 'left 1s');
            });

            $rowright.click(function(){
                $rowleft.css('position', 'absolute'),
                $rowleft.css('left', '41px'),
                $rowleft.css('transition', 'left 1s');
            });
        }
    }
    checkWidth();
    $(window).resize(checkWidth);
});