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

//NAV SCROLL TO TOP
function topFunction() {
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}

$(document).ready(function() {

    //SIDEBAR DISPLAY
    var $rowleft = $('.row-left');
    var $rowright = $('.row-right');

    function checkWidth(){
            $rowleft.removeClass('normal');
            $rowleft.addClass('mobile');

            $rowleft.hover(function(){
                $rowleft.removeClass('mobile');
                $rowleft.addClass('normal');
            });

            $rowright.hover(function(){
                $rowleft.removeClass('normal');
                $rowleft.addClass('mobile');
            });
    }
    checkWidth();
    $(window).resize(checkWidth);
});