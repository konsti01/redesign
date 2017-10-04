/* Appear js */
(function($){$.fn.appear=function(f,o){var s=$.extend({one:true},o);return this.each(function(){var t=$(this);t.appeared=false;if(!f){t.trigger('appear',s.data);return;}var w=$(window);var c=function(){if(!t.is(':visible')){t.appeared=false;return;}var a=w.scrollLeft();var b=w.scrollTop();var o=t.offset();var x=o.left;var y=o.top;if(y+t.height()>=b&&y<=b+w.height()&&x+t.width()>=a&&x<=a+w.width()){if(!t.appeared)t.trigger('appear',s.data);}else{t.appeared=false;}};var m=function(){t.appeared=true;if(s.one){w.unbind('scroll',c);var i=$.inArray(c,$.fn.appear.checks);if(i>=0)$.fn.appear.checks.splice(i,1);}f.apply(this,arguments);};if(s.one)t.one('appear',s.data,m);else t.bind('appear',s.data,m);w.scroll(c);$.fn.appear.checks.push(c);(c)();});};$.extend($.fn.appear,{checks:[],timeout:null,checkAll:function(){var l=$.fn.appear.checks.length;if(l>0)while(l--)($.fn.appear.checks[l])();},run:function(){if($.fn.appear.timeout)clearTimeout($.fn.appear.timeout);$.fn.appear.timeout=setTimeout($.fn.appear.checkAll,20);}});$.each(['append','prepend','after','before','attr','removeAttr','addClass','removeClass','toggleClass','remove','css','show','hide'],function(i,n){var u=$.fn[n];if(u){$.fn[n]=function(){var r=u.apply(this,arguments);$.fn.appear.run();return r;}}});})(jQuery);

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

    $('.my-animation').appear(function() {
        if(!isMobile.any()) $(this).addClass('animated');
    });

    //numbers
    $('.number-container').appear(function() {
        var count_element = parseInt($(".number", this).html(), 10);
        $('.number', this).countTo({
            from: 0,
            to: count_element,
            speed: 2500,
            refreshInterval: 50,
            decimals: 0,
            onUpdate: function () {
                $('.number').divide({
                    delimiter: ' ',
                    divideThousand: true, // 1,000..9 999
                    delimiterRegExp: /[\.\,\s]/g
                });
            },
            onComplete: function () {
                $('.number').divide({
                    delimiter: ' ',
                    divideThousand: true, // 1,000..9 999
                    delimiterRegExp: /[\.\,\s]/g
                });
            }
        });
});

    //faq
    $('.collapse')
        .on('shown.bs.collapse', function() {
            $(this)
                .parent()
                .find(".fa-plus")
                .removeClass("fa-plus")
                .addClass("fa-minus");
        })
        .on('hidden.bs.collapse', function() {
            $(this)
                .parent()
                .find(".fa-minus")
                .removeClass("fa-minus")
                .addClass("fa-plus");
        });

    function toggleBlock(block){
        var parentToggle = block.parent();
        var parent = parentToggle.parent();
        var content = $(".toggle-content", block.parent());
        var title = block;

        if(parent.hasClass("single-toggles")) {
            $(".toggle-title-text",parent).addClass("hover-icon");
            if($(".toggle .toggle-title").hasClass("active-toggle"))
                $(".toggle .toggle-title").removeClass("active-toggle");
            if($(".toggle").hasClass("active-bg"))
                $(".toggle").removeClass("active-bg");
        }

        if(content.css("display") === "none") {
            if(parent.hasClass("single-toggles")) {
                $(".toggle-content", parent).slideUp(200);
                $(".toggle-title-text", parent).addClass("hover-icon");
            }

            title.addClass("active-toggle");
            parentToggle.addClass("active-bg");
            content.slideDown(200);
            $(".toggle-title-text", block).removeClass("hover-icon");
        }
        else {
            content.slideUp(200);
            if(title.hasClass("active-toggle")){
                title.removeClass("active-toggle");
            }
            parentToggle.removeClass("active-bg");
            $(".toggle-title-text", block).addClass("hover-icon");
        }
    }

    $(".toggle .toggle-title").click(function() {
        toggleBlock($(this));
    });

    toggleBlock($(".single-toggles .toggle:first-child .toggle-title"));
});