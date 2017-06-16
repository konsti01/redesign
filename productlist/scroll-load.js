//GOMBOS VERZIÓ
$(document).ready(function () {
    size_cont = $("#cont .products").size();        //ez most 120
    x=60;                                           //ennyit jelenít meg először
    $('#cont .products:lt('+x+')').show();
    $('.show-more').click(function () {             //klikkre
        x= (x+4 <= size_cont) ? x+4 : size_cont;    //ennyit ad hozzá a megjelenítendőkhöz
        $('#cont .products:lt('+x+')').show();      //és megjeleníti
    });
});

//BANNERHELY ÉS WIDGET FIX
/*$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 700) {
        $(".bannerhely").addClass("bannerhely-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
        $(".widget").addClass("widget-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
    }
    else {
        $(".bannerhely").removeClass("bannerhely-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
        $(".widget").removeClass("widget-fixed col-md-2-250 col-lg-2-250 col-xl-2-250");
    }
});*/

//SELLER NAME LENGTH
$(document).ready(function () {
    var name = document.getElementsByClassName('seller');

    for (var i = 0;i <= name.length;i++) {
        if((name[i].innerHTML.length)>13){
            var new_name = name[i].innerHTML.slice(0, 13) + '...';
            name[i].innerHTML = new_name;
        }
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

//SPECIFY FIX
/*$(window).scroll(function() {
 var scroll = $(window).scrollTop();

 if (scroll >= 150) {
 $(".specify").addClass("specify-fixed"),
 $(".cont").addClass("cont-fixed");
 }
 else {
 $(".specify").removeClass("specify-fixed"),
 $(".cont").removeClass("cont-fixed"),

 $('.cont-fixed').css('margin-top', '110px');
 }
 });*/

//SCROLL SPECIFY
$(window).scroll(function() {
 var scroll = $(window).scrollTop();

 if (scroll >= 1) {
     $('.btn-group .btn').css('padding', '3px 6px'),
     $('.search-bar').css('', ''),
     $('.sort').css('', '');
 }else{
     $('.btn-group .btn').css('padding', '6px 12px'),
         $('.search-bar').css('', ''),
         $('.sort').css('', '');
 }
 });