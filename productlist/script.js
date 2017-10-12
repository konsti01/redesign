//BANNERHELY ÉS WIDGET FIX
function bannerscroll(){
    //TODO mi ez a 140?
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
     $('.search-row .sort').addClass('pushed');

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