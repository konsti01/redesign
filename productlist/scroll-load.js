//BANNERHELY ÉS WIDGET FIX
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 700) {
        $(".bannerhely").addClass("bannerhely-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
        $(".widget").addClass("widget-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
    }
    else {
        $(".bannerhely").removeClass("bannerhely-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
        $(".widget").removeClass("widget-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
    }
});

//SELLER NAME LENGTH
/*$(document).ready(function () {
    var name = document.getElementsByClassName('seller');

    for (var i = 0;i <= name.length;i++) {
        if((name[i].innerHTML.length)>13){
            var new_name = name[i].innerHTML.slice(0, 13) + '...';
            name[i].innerHTML = new_name;
        }
    }
});*/

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
     $('.select2-container .select2-selection--single').css('height', '25px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('line-height', '25px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('font-size', '12px'),
     $('.search-bar').css('font-size', '11px'),
     $('.search-bar').css('padding', '3px 10px'),
     $('.search-bar img').css('width', '15px');
 }else{
     $('.btn-group .btn').css('padding', '3px 12px'),
     $('.btn-group .btn').css('font-size', '14px'),
     $('.select2-container .select2-selection--single').css('height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('line-height', '28px'),
     $('.select2-container--default .select2-selection--single .select2-selection__rendered').css('font-size', '14px'),
     $('.search-bar').css('font-size', '14px'),
     $('.search-bar').css('padding', '5px 10px'),
     $('.search-bar img').css('width', '20px');
 }
 });

//NAV SCROLL TO TOP
function topFunction() {
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}

//SELECT2
$(document).ready(function() {
    $(".technika").select2();
    $(".szin").select2();
});