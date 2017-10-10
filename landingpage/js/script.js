$(document).ready(function() {
    $("#top-menu").sticky({topSpacing:0});
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

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
            },
            onUpdate: Math.trunc(count_element),
            onComplete: Math.trunc(count_element)
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