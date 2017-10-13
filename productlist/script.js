//BANNERHELY ÉS WIDGET FIX
function bannerscroll(){
    //TODO  - ".topnav (90px)"
    //TODO  - ".main (40px)"
    //TODO  - ".sidebar és .bannerspot közötti kihagyás (10px)"

    rowheight = $('.sidebar').height() - 140;
    footertop = $('footer').position().top;
    bannerbottom = $('.sticky-banner').position().top + $('.sticky-banner').height();
    scrolltop = $(document).scrollTop();

    if (scrolltop > rowheight){
        if (scrolltop + bannerbottom - rowheight < footertop){
            $('.sticky-banner').css('margin-top', scrolltop -rowheight);
        } else {
            $('.sticky-banner').css('margin-top', footertop - bannerbottom - 10);
        }
    } else {
        $('.sticky-banner').css('margin-top', 0);
    }
}
$(window).bind('scroll resize', bannerscroll);
$(document).ready(function() {
    bannerscroll();
});

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
            $('.response-box').show();

            $( ".fa-times" ).click(function() {
                $('.response-box').hide();
            });
        });

    //SIDEBAR DISPLAY
    var $window = $(window);
    var $rowleft = $('.row-left');
    var $rowright = $('.row-right');

    function checkWidth() {
        var windowsize = $window.width();
        var sidebar_breakpoint = 986;

        if(windowsize >= sidebar_breakpoint) {
            $rowleft.removeClass('mobile');
            $rowleft.addClass('normal');

            $rowright.click(function(){
                $rowleft.removeClass('mobile');
                $rowleft.addClass('normal');
            });
        }
        else if(windowsize < sidebar_breakpoint){
            $rowleft.removeClass('normal');
            $rowleft.addClass('mobile');

            $rowleft.click(function(){
                $rowleft.removeClass('mobile');
                $rowleft.addClass('normal');
            });

            $rowright.click(function(){
                $rowleft.removeClass('normal');
                $rowleft.addClass('mobile');
            });
        }
    }
    checkWidth();
    $(window).resize(checkWidth);
});