//GOMBOS VERZIÓ
$(document).ready(function () {
    size_cont = $("#cont .products").size();        //ez most 40
    x=12;                                           //ennyit jelenít meg először
    $('#cont .products:lt('+x+')').show();
    $('.show-more').click(function () {             //klikkre
        x= (x+4 <= size_cont) ? x+4 : size_cont;    //ennyit ad hozzá a megjelenítendőkhöz
        $('#cont .products:lt('+x+')').show();      //és megjeleníti
    });
});

//BANNERHELY ÉS WIDGET FIX
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 650) {
        $(".bannerhely").addClass("bannerhely-fixed col-md-2-custom");
        $(".widget").addClass("widget-fixed col-md-2-custom");
    }
    else {
        $(".bannerhely").removeClass("bannerhely-fixed col-md-2-custom");
        $(".widget").removeClass("widget-fixed col-md-2-custom");
    }
});

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

//PRODUCT IMAGE HEIGHT
/*$(document).ready(function() {
    var window_width = $(window).width();               //ablak szélessége
    var nav_width = $('.col-md-2-custom').width();      //nav szélessége
    $('.col-md-10-custom').css({
        'width': window_width - nav_width + 'px'        //ablak-nav
    });

    var image_width = $('.product-image').width();    //kép szélessége
    $('.product-image').css({
        'height': image_width + 'px'                  //magasság=szélesség
    });
 });*/

//SCROLL VERZIÓ
/*$(document).ready(function() {
 var win = $(window);
 var doc = $(document);
 var size_cont = $("#cont .products").size();        //ez most 40
 var x = 12;                                         //ennyit
 $('#cont .products:lt('+x+')').show();              //jelenít meg először

 win.scroll(function() {
 if (doc.height() - win.height() == win.scrollTop()) {
 x = (x+4 <= size_cont) ? x+4 : size_cont;   //ennyit ad hozzá a megjelenítendőkhöz
 $('#cont .products:lt('+x+')').show();      //és megjeleníti
 }
 });
 });*/