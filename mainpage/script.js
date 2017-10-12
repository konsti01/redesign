//BANNERHELY ÉS WIDGET FIX
function bannerscroll(){
    //TODO mi ez a 140?
    rowheight = $('.sidebar').height() - 140;
    footertop = $('.newsletter').position().top;
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

//SIDEBAR DISPLAY
$(document).ready(function() {
    var $window = $(window);
    var $rowleft = $('.row-left');
    var $rowright = $('.row-right');

    function checkWidth() {
        var windowsize = $window.width();
        var sidebar_breakpoint = 986;

        if(windowsize >= sidebar_breakpoint) {
            $rowleft.css('position', 'absolute'),
                $rowleft.css('left', '250px'),
                $rowleft.css('transition', 'left 1s');

            $rowright.click(function(){
                $rowleft.css('position', 'absolute'),
                    $rowleft.css('left', '250px'),
                    $rowleft.css('transition', 'left 1s');
            });
        }
        else if(windowsize < sidebar_breakpoint){
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