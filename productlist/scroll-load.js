//GOMBOS VERZIÓ

/*$(document).ready(function () {
    size_cont = $("#cont .products").size();        //ez most 40
    x=12;                                           //ennyit jelenít meg először
    $('#cont .products:lt('+x+')').show();
    $('.show-more').click(function () {             //klikkre
        x= (x+4 <= size_cont) ? x+4 : size_cont;    //ennyit ad hozzá a megjelenítendőkhöz
        $('#cont .products:lt('+x+')').show();      //és megjeleníti
    });
});*/

//SCROLL VERZIÓ

$(document).ready(function() {
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
});
