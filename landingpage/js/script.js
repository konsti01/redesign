$(document).ready(function() {
    $("#top-menu").sticky({topSpacing:0});

    //numbers
    $('.number-container').appear(function(){
        var count_element = parseInt($(".number", this).html(), 10);
        $('.number', this).countTo({
            from: 0,
            to: count_element,
            speed: 2500,
            refreshInterval: 50,
            decimals: 0,
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
            }
        });
    });

    //faq
    $('.collapse')
        .on('shown.bs.collapse', function() {
            $(this)
                .parent()
                .find(".fa-plus")
                .removeClass("active")
            $(this)
                .parent()
                .find(".fa-minus")
                .addClass("active");
        })
        .on('hidden.bs.collapse', function() {
            $(this)
                .parent()
                .find(".fa-minus")
                .removeClass("active")
            $(this)
                .parent()
                .find(".fa-plus")
                .addClass("active");
        });
});