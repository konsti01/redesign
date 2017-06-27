/* Appear js */
(function($){$.fn.appear=function(f,o){var s=$.extend({one:true},o);return this.each(function(){var t=$(this);t.appeared=false;if(!f){t.trigger('appear',s.data);return;}var w=$(window);var c=function(){if(!t.is(':visible')){t.appeared=false;return;}var a=w.scrollLeft();var b=w.scrollTop();var o=t.offset();var x=o.left;var y=o.top;if(y+t.height()>=b&&y<=b+w.height()&&x+t.width()>=a&&x<=a+w.width()){if(!t.appeared)t.trigger('appear',s.data);}else{t.appeared=false;}};var m=function(){t.appeared=true;if(s.one){w.unbind('scroll',c);var i=$.inArray(c,$.fn.appear.checks);if(i>=0)$.fn.appear.checks.splice(i,1);}f.apply(this,arguments);};if(s.one)t.one('appear',s.data,m);else t.bind('appear',s.data,m);w.scroll(c);$.fn.appear.checks.push(c);(c)();});};$.extend($.fn.appear,{checks:[],timeout:null,checkAll:function(){var l=$.fn.appear.checks.length;if(l>0)while(l--)($.fn.appear.checks[l])();},run:function(){if($.fn.appear.timeout)clearTimeout($.fn.appear.timeout);$.fn.appear.timeout=setTimeout($.fn.appear.checkAll,20);}});$.each(['append','prepend','after','before','attr','removeAttr','addClass','removeClass','toggleClass','remove','css','show','hide'],function(i,n){var u=$.fn[n];if(u){$.fn[n]=function(){var r=u.apply(this,arguments);$.fn.appear.run();return r;}}});})(jQuery);

$(document).ready(function() {

	$('.header-wrapper').imagesLoaded( { background: true }, function() {
	 // console.log('header-wrapper background image loaded');
	});


//header slider, ha kell
/*
	var mainSlider = $("#main-slider");
	mainSlider.owlCarousel({
 
      navigation : false, // Show next and prev buttons
      pagination : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay: 6000,
      navigationText : ["prev","next"],
      transitionStyle : "fade",
      mouseDrag: false,
      touchDrag: false

  	});
*/

	$("#top-menu").sticky({topSpacing:0});

/*
	//Menü felragadása
	var menuScrollTop = 0; //$('#top-menu').offset().top;

	$(window).load(function() {
		if(menuScrollTop > 0 && $('#top-menu').hasClass("nav-container-fix") == false)
			{
				$('#top-menu').addClass("nav-container-fix");
			}
	});

	$(window).scroll(function(event){

		var windowScrollTop = $(this).scrollTop();

		if (windowScrollTop > menuScrollTop)
		{
			//$('#button-scroll-top').css("display", "inline-block");

			if($('#top-menu').hasClass("nav-container-fix") == false)
			{
				$('#top-menu').addClass("nav-container-fix");
			}

		} 
		else
		{
			//$('#button-scroll-top').css("display", "none");

			if($('#top-menu').hasClass("nav-container-fix"))
			{
				$('#top-menu').removeClass("nav-container-fix");
			}
		}

	});
*/

/*		
	$('.number').each( function(){
	
		var count_element = parseInt($(this).html(), 10);

		$(this).countTo({
			from: 0,
			to: count_element,
			speed: 2500,
			refreshInterval: 50,
			decimals: 0
		});
	});
*/
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

	$('.number-container').appear(function() {
		var count_element = parseInt($(".number", this).html(), 10);

		$('.number', this).countTo({
			from: 0,
			to: count_element,
			speed: 2500,
			refreshInterval: 50,
			decimals: 0
		});
	});	

	//Legördülő infó (lásd Gyakori kérdések blokk)
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
						
						$(".toggle-content",parent).slideUp(200);
						$(".toggle-title-text",parent).addClass("hover-icon");
					}

					title.addClass("active-toggle");
					parentToggle.addClass("active-bg");

					content.slideDown(200);

					$(".toggle-title-text", block).removeClass("hover-icon");

				}
				else {
					content.slideUp(200);

					if(title.hasClass("active-toggle"))
					{
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

		//Ügyfél idézet és a profil kép carosuel szinkronizálásas	
		var sync1 = $("#sync1");
		var sync2 = $("#sync2");

		sync1.owlCarousel({
			singleItem : true,
			slideSpeed : 1000,
			navigation: false,
			pagination: false,
			afterAction : syncPosition,
			responsiveRefreshRate : 200,
			autoHeight: false,
			autoPlay: 20000
		});

		sync2.owlCarousel({
			items : 6,
			itemsDesktop      : [1199,6],
			itemsDesktopSmall     : [979,4],
			itemsTablet       : [768,3],
			itemsMobile       : [479,2],
			pagination: false,
			navigation: false,
			navigationText: [
			"<i class='fa fa-chevron-left fa-3x'></i>",
			"<i class='fa fa-chevron-right fa-3x'></i>"
			],
			responsiveRefreshRate : 100,
			afterInit : function(el){
				el.find(".owl-item").eq(0).addClass("synced");
			}
		});

		function syncPosition(el){
			var current = this.currentItem;
			$("#sync2")
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced")
			if($("#sync2").data("owlCarousel") !== undefined){
				center(current)
			}
		}

		$("#sync2").on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).data("owlItem");
			sync1.trigger("owl.goTo",number);
		});

		function center(number){
			var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
			var num = number;
			var found = false;
			for(var i in sync2visible){
				if(num === sync2visible[i]){
					var found = true;
				}
			}

			if(found===false){
				if(num>sync2visible[sync2visible.length-1]){
					sync2.trigger("owl.goTo", num - sync2visible.length+2)
				}else{
					if(num - 1 === -1){
						num = 0;
					}
					sync2.trigger("owl.goTo", num);
				}
			} else if(num === sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", sync2visible[1])
			} else if(num === sync2visible[0]){
				sync2.trigger("owl.goTo", num-1)
			}

		}

		//Második idézettől kezdjük a sort
		//sync1.trigger('owl.jumpTo', 1);

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            }


        }
    })
});
