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
     $('.search-bar img').css('width', '15px'),
     $('.search-bar').css('transition', 'padding 200ms'),
     $('.search-bar img').css('transition', 'width 200ms'),
     $('.search-row .sort').css('display', 'inline-block'),
     $('.keywords .sort').css('display', 'none');
 }else{
     $('.search-row .btn-group .btn').css('padding', '3px 12px'),
     $('.search-row .btn-group .btn').css('font-size', '14px'),
     $('.select2-container .select2-selection--single').css('height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('line-height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('font-size', '14px'),
     $('.search-bar').css('font-size', '14px'),
     $('.search-bar').css('padding', '2px 10px'),
     $('.search-bar img').css('width', '20px'),
     $('.search-row .sort').css('display', 'none'),
     $('.keywords .sort').css('display', 'block');
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

/*
    // LOAD MORE PROD
    var current = 1;

    //pn1
    $('#pn1').css('color', '#ccc'),
    $('#pn1').css('background-color', 'transparent'),
    $('#pn1').css('cursor', 'auto');

    //pn2
    $("#pn2").click(function(){
        $('#pn2').css('color', '#ccc'),
        $('#pn2').css('background-color', 'transparent'),
        $('#pn2').css('cursor', 'auto');

        current = 2;
    });
        $('#pn2').one('click', getProductsJson);

    //pn3
    $("#pn3").click(function(){
        $('#pn2').css('color', '#ccc'),
        $('#pn2').css('background-color', 'transparent'),
        $('#pn2').css('cursor', 'auto'),
        $('#pn2').click(),

        $('#pn3').css('color', '#ccc'),
        $('#pn3').css('background-color', 'transparent'),
        $('#pn3').css('cursor', 'auto');

        current = 3;
    });
        $('#pn3').one('click', getProductsJson);

    //pn4
    $("#pn4").click(function(){
        $('#pn2').css('color', '#ccc'),
        $('#pn2').css('background-color', 'transparent'),
        $('#pn2').css('cursor', 'auto'),
        $('#pn2').click(),

        $('#pn3').css('color', '#ccc'),
        $('#pn3').css('background-color', 'transparent'),
        $('#pn3').css('cursor', 'auto'),
        $('#pn3').click(),

        $('#pn4').css('color', '#ccc'),
        $('#pn4').css('background-color', 'transparent'),
        $('#pn4').css('cursor', 'auto');

        current = 4;
    });
        $('#pn4').one('click', getProductsJson);

    //pn5
    $("#pn5").click(function(){
        $('#pn2').css('color', '#ccc'),
        $('#pn2').css('background-color', 'transparent'),
        $('#pn2').css('cursor', 'auto'),
        $('#pn2').click(),

        $('#pn3').css('color', '#ccc'),
        $('#pn3').css('background-color', 'transparent'),
        $('#pn3').css('cursor', 'auto'),
        $('#pn3').click(),

        $('#pn4').css('color', '#ccc'),
        $('#pn4').css('background-color', 'transparent'),
        $('#pn4').css('cursor', 'auto'),
        $('#pn4').click(),

        $('#pn5').css('color', '#ccc'),
        $('#pn5').css('background-color', 'transparent'),
        $('#pn5').css('cursor', 'auto'),

        $('.next').css('display', 'none');

        current = 5;
    });
            $('#pn5').one('click', getProductsJson);

    //next
    $(".next").click(function(){
        current = current+1;

        if(current==2){
            $('#pn2').css('color', '#ccc'),
                $('#pn2').css('background-color', 'transparent'),
                $('#pn2').css('cursor', 'auto'),

                $('#pn2').click();
        }
        if(current==3){
            $('#pn3').css('color', '#ccc'),
                $('#pn3').css('background-color', 'transparent'),
                $('#pn3').css('cursor', 'auto'),

                $('#pn2').click(),
                $('#pn3').click();
        }
        if(current==4){
            $('#pn4').css('color', '#ccc'),
                $('#pn4').css('background-color', 'transparent'),
                $('#pn4').css('cursor', 'auto'),

                $('#pn2').click(),
                $('#pn3').click(),
                $('#pn4').click();
        }
        if(current>=5){
            $('#pn5').css('color', '#ccc'),
                $('#pn5').css('background-color', 'transparent'),
                $('#pn5').css('cursor', 'auto'),

                $('.next').css('display', 'none'),

                $('#pn2').click(),
                $('#pn3').click(),
                $('#pn4').click(),
                $('#pn5').click();
        }
    });
    //$('.next').unbind().click(getProductsJson);

    //next by last prod
    $(".products:last-child .product-box").click(function(){
        current = current+1;

        if(current==2){
            $('#pn2').css('color', '#ccc'),
                $('#pn2').css('background-color', 'transparent'),
                $('#pn2').css('cursor', 'auto'),

                $('#pn2').click();
        }
        if(current==3){
            $('#pn3').css('color', '#ccc'),
                $('#pn3').css('background-color', 'transparent'),
                $('#pn3').css('cursor', 'auto'),

                $('#pn2').click(),
                $('#pn3').click();
        }
        if(current==4){
            $('#pn4').css('color', '#ccc'),
                $('#pn4').css('background-color', 'transparent'),
                $('#pn4').css('cursor', 'auto'),

                $('#pn2').click(),
                $('#pn3').click(),
                $('#pn4').click();
        }
        if(current>=5){
            $('#pn5').css('color', '#ccc'),
                $('#pn5').css('background-color', 'transparent'),
                $('#pn5').css('cursor', 'auto'),

                $('.next').css('display', 'none'),

                $('#pn2').click(),
                $('#pn3').click(),
                $('#pn4').click(),
                $('#pn5').click();
        }
    });
*/

    //LOAD MORE PROD BUTTON
    $('.show-more').click(getProductsJson);
});


// SIDEBAR DISPLAY
if ($(window).width() < 1000) {
    $(".row-left").click(function(){
        $('.row-left').css('position', 'absolute'),
        $('.row-left').css('left', '250px'),
        $('.row-left').css('transition', 'left 1s');
    });

    $(".row-right").click(function(){
        $('.row-left').css('position', 'absolute'),
        $('.row-left').css('left', '41px'),
        $('.row-left').css('transition', 'left 1s');
    });
}
else if ($(window).width() > 1000){
    $('.row-left').css('position', 'absolute'),
    $('.row-left').css('left', '250px'),
    $('.row-left').css('transition', 'left 1s');
}
/*
$(window).resize(function() {
    if ($(window).width() < 1000){
        location.reload();
    }
});
*/