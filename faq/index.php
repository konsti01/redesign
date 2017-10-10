<?php include_once('../header.php'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

<div id="wrapper" class="disabled">
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.2/vue.js" integrity="sha256-cKn6iWPkYSh6hiC+XQfui0P2+43XZa8N7nZC8qKyqRE=" crossorigin="anonymous"></script>
            <div id="app" style="min-height: 350px;">
                <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
                    <div class="row">
                        <div class="col" style="margin-top: 100px; width: 100% !important;">
                            <h1 class="text-center">Kapcsolat / kérdések</h1>
                            <div class="text-center-lead">
                                <span>
                                    Összegyűjtöttük a leggyakoribb kérdéseket, amikkel meg szoktak keresni minket, hogy hátha neked is hasonló kérdésed van és így egyből választ találj a kérdésedre. Mielőtt üzenetet írnál nekünk nézd meg a kérdéseket, és ha nincs köztünk, akkor írj nekünk.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="background-color:#8bc34a; margin-left: -30px; margin-right:-30px;">
                        <div class="col-12">
                            <form role="search" class="searchbar search-full" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get">
                                <input name="utf8" type="hidden" value="&#x2713;" />
                                <img src="https://image.flaticon.com/icons/svg/54/54554.svg">
                                <input type="search" name="query" id="search-bar" placeholder="Keresés..." autocomplete="off" aria-label="Search" />
                                <input type="submit" id="search-button" value="Keresés">
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div v-if="!errorView">
                                <div v-if="!loading">
                                    <ul class="faq-type-nav">
                                        <li role="presentation" style="cursor:pointer;"  @click="selectType(type)" v-for="type in types" :class="{'active': selectedType == type}"><a @click="selectType(type)" >{{ type }}</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div v-if="errorView && !loading">
                                <div style="font-size: 20px;" class="alert alert-danger">
                                    <i class="far fa-exclamation-circle"></i> Hiba történt a keresés közben!
                                </div>
                            </div>

                            <div v-if="loading">
                                <div style="font-size: 20px;" class="alert alert-success">
                                    <i class="far fa-circle-o-notch fa-spin"></i> Kérlek várj...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="!errorView">
                        <div v-if="!loading">
                            <div class="row" v-if="resultsFound">
                                <div class="col-md-2">
                                    <span style="font-size: 10px; color: #ccc; text-transform: uppercase;">KATEGÓRIÁK</span>
                                    <ul class="faq-nav">
                                        <li role="presentation" style="cursor:pointer;" key="id" v-for="(category, id) in categories"><a :class="{'active': category.selected}"  href="#" style="cursor:pointer;" @click.prevent="selectCategory(id)">{{ category.name }}</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-10">
                                    <span style="font-size: 10px; color: #ccc; text-transform: uppercase;">KÉRDÉSEK-VÁLASZOK</span>
                                    <div v-for="(faq, id) in faqs[selectedCategory]" class="alert alert-default faq-item" @click="selectFaq(id)">
                                        <button type="button" class="close">
                                            <i aria-hidden="true" class="far" :class="{'fa-plus': !faq.selected, 'fa-minus': faq.selected}"></i>
                                        </button>
                                        <div style="cursor:pointer" class="faq-question">{{faq.question}}</div>
                                        <div v-if="faq.selected" v-html="faq.answer" class="faq-answer"></div>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 20px;" class="alert alert-warning" v-else>
                                Nincs találat!
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 20px 0 20px 0;">
                        <div class="col-md-12 col-md-offset-2 button-center">
                            <a href="/contact" class="btn btn-lg btn-default">
                                <i class="far fa-envelope"></i>
                                <span style="text-transform: uppercase;">Nem találtam meg a kérdésemre a választ</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<style>
    body{
        background-color: #fff;
    }
</style>

<?php include_once('../footer.php'); ?>

<!-- Scriptekk -->
<script>
    echo.init({
        offset: 100,
        throttle: 250,
        unload: false,
        callback: function (element, op) {
            $(element).siblings('.echo-loader').remove();
            //console.log(element, 'has been', op + 'ed')
        }
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#favourite-benefit-popover').popover({
            trigger: 'hover',
            placement: 'bottom',
            html: true,
            //title: '',
            content: 'A kedvencnek jelölt termékeket később is könnyen megtalálod a Meska 100.000 terméke között, akkor is ha később megvásárolják.'
        });
        var pdp = $('#post-details-popover').popover({
            trigger: 'focus hover',
            placement: isViewport('xs') ? 'bottom' : 'left',
            html: true,
            content: '<i class="far fa-times pull-right cursor-pointer" aria-hidden="true"></i><div><strong>Lehetséges szállítási módok és díjai (Magyarországra)</strong><table class="table table-striped-inverse table-condensed table-postage"><thead><tr align="center"><th></th><th>Egy termék<br>vásárlása esetén</th><th>Több termék vásárlása<br>esetén összesen</th></tr></thead><tbody><tr><td>Futárszolgálat utánvéttel</td><td align="center">1 000 Ft</td><td align="center">1 000 Ft</td></tr><tr><td>Futárszolgálat előre fizetéssel</td><td align="center">0 Ft</td><td align="center">0 Ft</td></tr></tbody></table></div>'
        });
        pdp.on("show.bs.popover", function(e){
            if (!isViewport('xs')){
                pdp.data("bs.popover").tip().css({"width": "500px", "max-width": "500px"});
            }
        });


        $('#barion-details-popover').popover({
            trigger: 'focus hover',
            placement: 'bottom',
            html: true,
            content: '<i class="far fa-times pull-right cursor-pointer" aria-hidden="true"></i>Bankkártyával is fizethető'
        });
        $('#giftcard-details-popover').popover({
            trigger: 'focus hover',
            placement: 'bottom',
            html: true,
            content: '<i class="far fa-times pull-right cursor-pointer"></i>Ajándékkártyával is fizethető'
        });


        jQuery("#quick-search-input").on("keyup", function(event){
            var suggestion = jQuery("#search-suggestion");
            var value = jQuery(this).val();
            if(value !== ""){
                suggestion.children("a").children("span").text(value);
                jQuery("#search-suggestion .shop-link").attr("href", "/Boltok/x/legujabb/1?q="+$.base64.encode("shop_name="+value));
                jQuery("#search-suggestion .fragment-link").attr("href", "/find?q="+value+"&search_in_fragments=on");
                jQuery("#search-suggestion .ascii-link").attr("href", "/find?q="+value+"&ascii=on");
                suggestion.slideDown();
            } else {
                suggestion.children("a span").html("");
                suggestion.slideUp();
            }
        });

        jQuery("#quick-search-input").focus(function(){
            var value = jQuery("#quick-search-input").val();
            if(value !== ""){
                jQuery("#search-suggestion").slideDown();
            }
        });

        jQuery("#quick-search-input").blur(function(){
            jQuery("#search-suggestion").slideUp();
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var menu_timer = null;
        var menu_delay = 500;
        $(".dropdown-hover").hover(
            function () {
                var element = $(this);
                menu_timer = window.setTimeout(
                    function () {
                        element.find("div:first").show();
                    }, menu_delay);
            },
            function () {
                window.clearTimeout(menu_timer);
                $(this).find("div:first").hide();
            }
        );
    });

    $(".favourizer").click(function (e) {
        e.preventDefault();

        var $this = $(this);
        if (parseInt($this.data('is-favourite')) === 1){
            return;
        }
        var product_id = parseInt($this.data('product-id'));
        var shop_id = parseInt($this.data('shop-id'));
        var product_button = $('.product-favourizer');
        var shop_button = $('.shop-favourizer');
        var product_shop_button = $('.product-shop-favourizer');
        var icon = $this.find('.fa');

        icon.removeClass('fa-heart-o').removeClass('color-red').addClass('fa-spinner').addClass('fa-spin');

        $.ajax({
            method: 'POST',
            url: '/Favourite/add',
            dataType: 'json',
            data: {
                product_id : product_id,
                shop_id : shop_id
            },
            success: function(response){
                icon.removeClass('fa-spinner').removeClass('fa-spin').addClass('fa-heart-o').addClass('color-red');
                if (response.product_added){
                    product_button.find('.fa').removeClass('fa-heart-o').addClass('fa-heart').removeClass('color-red');
                    product_button.data('is-favourite', 1);
                }
                if (response.shop_added){
                    shop_button.find('.fa').removeClass('fa-heart-o').addClass('fa-heart');
                    shop_button.data('is-favourite', 1);
                }
                if (response.shop_added && response.product_added){
                    product_shop_button.find('.fa').removeClass('fa-heart-o').addClass('fa-heart');
                    product_shop_button.data('is-favourite', 1);
                }
                if (response.status !== 'ok'){
                    alert(response.message);
                }
            },
            error: function(){
                alert('Hiba történt. Próbáld újra!');
                icon.removeClass('fa-spinner').removeClass('fa-spin').addClass('fa-heart-o').addClass('color-red');
            }
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).on({
        mouseenter: function(){
            jQuery('.dropright-summary').hide();
        },
        mouseleave: function(){
            jQuery('.dropright-summary').show();
        }
    }, '.dropdown-hover-menu ul li.dropright-hover');
</script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $("#sidebar-wrapper").on({
        mouseenter: function(){
            $("#wrapper").addClass("toggled");
        },
        mouseleave: function(){
            $("#wrapper").removeClass("toggled");
        }
    });
</script>
<script type="text/javascript">
    (function ($) {
        $.fn.sticky = function () {
            this.each(function () {
                var $this = $(this);
                var default_top_value = $this.css('top');
                var top_offset = $this.offset().top;

                $(window).on('scroll', function(){

                    if ($this.data('no-sticky') !== undefined){
                        if (isViewport($this.data('no-sticky'))){
                            $this.css('top', default_top_value);
                            return;
                        }
                    }
                    parent_height = $this.parent().outerHeight();
                    height = $this.outerHeight(true);
                    scroll_top = $(document).scrollTop();
                    if (scroll_top > top_offset) {
                        top_to_set = scroll_top - top_offset;
                        if (height + top_to_set > parent_height) {
                            top_to_set = parent_height - height;
                        }
                        $this.css('top', top_to_set);
                    } else {
                        $this.css('top', default_top_value);
                    }
                });
            });
        };
    }(jQuery));

    (function ($) {
        $.fn.linkify = function () {
            this.each(function () {
                var $this = $(this);

                // http[s]://[www.][meska|alkotokboltja|izporta]
                var urlRegex =/(\b(https?:\/\/)(www\.)?(meska|alkotokboltja|izporta)[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
                // [www.][meska|alkotokboltja|izporta]
                var shortRegex =/((^|[^\.^\/])(www\.)?(meska|alkotokboltja|izporta)[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;

                $this.html(
                    $this.html()
                        .replace(urlRegex, '<a target="_blank" href="$1">$1</a>')
                        .replace(shortRegex, '<a target="_blank" href="https://$1">$1</a>')
                );
            });
        }
    }(jQuery));
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".sticky").sticky();
        $(".linkify").linkify();

        $("a[href^='#'].slide-to").bind('click', function(e) {
            e.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                    scrollTop: $(hash).offset().top - 15
                }, 500, 'swing', function(){window.location.hash = hash;}
            );
        });

        $('#shopDatasCarousel-md').on('slid.bs.carousel', function () {
            echo.render();
        });
        $('#shopDatasCarousel-sm').on('slid.bs.carousel', function () {
            echo.render();
        });
        $('#shopDatasCarousel-xs').on('slid.bs.carousel', function () {
            echo.render();
        });

    });
</script>
<script type="text/javascript">
    var $ctrl_minus = $("#to-basket-number-container>.minus");
    var $ctrl_plus = $("#to-basket-number-container>.plus");
    var $input = $("#to-basket-number-container>.to-basket-number-input");
    var maxnum = parseInt($input.data('max'));

    $ctrl_minus.on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        if (!$(this).hasClass('disabled')){
            var s = parseInt($input.val())-1;
            if (s > 1){
                $input.val(s);
            }
            if (s <= 1){
                $input.val(1);
                $ctrl_minus.addClass('disabled');
            }
        }
        if (parseInt($input.val()) < maxnum){
            $ctrl_plus.removeClass('disabled');
        }
    });
    $ctrl_plus.on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        if (!$(this).hasClass('disabled')){
            var s = parseInt($input.val())+1;
            if (s < maxnum){
                $input.val(s);
            }
            if (s >= maxnum){
                $input.val(maxnum);
                $ctrl_plus.addClass('disabled');
            }
        }
        if (parseInt($input.val()) > 1){
            $ctrl_minus.removeClass('disabled');
        }
    });
    $input.on('change', function(){
        if ($(this).val() < 1){
            $(this).val(1);
        }
        if ($(this).val() > maxnum){
            $(this).val(maxnum);
        }
    });
</script>
<!-- Social things -->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<!-- Social things end -->
<script>
    function isViewport( alias ) {
        return $('.device-' + alias).is(':visible');
    }
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        window.FaqApp = new Vue({
            el: '#app',
            data: {
                selectedCategory: "",
                selectedType: "Vásárlói kérdések",
                types: [],
                categories: {},
                faqs: {},
                loading: true,
                searchTerm: "",
                searchView: false,
                errorView: false,
                resultsFound: true
            },
            methods: {
                selectCategory: function(e) {
                    vm.selectedCategory = e;
                    for (var id in this.categories) {
                        if(id != e) {
                            this.categories[id]["selected"] = false
                        }
                    }
                    this.categories[e].selected = true;
                },
                selectFaq: function(e) {
                    this.faqs[this.selectedCategory][e].selected = !this.faqs[this.selectedCategory][e].selected;

                        var icon = document.getElementsByClassName('far');
                        icon.classList.remove('fa-plus');
                        icon.classList.add('fa-minus');
                        alert('nyitva');

                },
                selectType: function(e) {
                    this.selectedType = e;
                    this.search();
                },
                loadList: function() {
                    vm = this;
                    vm.loading = true
                    var selectedCategory = vm.selectedCategory

                    $.getJSON('/help/search', {q: this.searchTerm, t: this.selectedType}, function(resp) {
                        if(resp["status"] != "ok") {
                            vm.errorView = true
                            vm.loading = false
                            return
                        }

                        vm.errorView = false

                        vm.types = resp.types;

                        if(!$.inArray(vm.selectedType, vm.types)) {
                            vm.selectedType = vm.types[0];
                        }

                        for(f in vm.faqs) {
                            Vue.delete(vm.faqs, f)
                        }

                        for(c in vm.categories) {
                            Vue.delete(vm.categories, c)
                        }

                        for(v in resp["categories"]) {
                            if(selectedCategory == "") {
                                selectedCategory = v
                            }

                            if(selectedCategory == v) {
                                vm.selectedCategory = v;
                                resp["categories"][v]["selected"] = true;
                            } else {
                                resp["categories"][v]["selected"] = false;
                            }

                            Vue.set(vm.categories, v, resp["categories"][v])
                        }

                        for(v in resp["faqs"]) {
                            for(f in resp["faqs"][v]) {
                                resp["faqs"][v][f]['selected'] = false
                            }
                            Vue.set(vm.faqs, v, resp["faqs"][v])
                        }

                        if(Object.keys(vm.faqs).length > 0) {
                            vm.resultsFound = true;
                        } else {
                            vm.resultsFound = false;
                        }

                        vm.loading = false
                    })
                },
                search: function() {
                    this.loadList();
                    if(this.searchTerm != '') {
                        this.searchView = true;
                    }
                },
                clearSearch: function() {
                    this.searchTerm = "";
                    this.searchView = false;
                    this.loadList();
                }
            },
            created: function() {
                this.loadList()
            }
        })
    });
</script>
<base href="https://www.meska.hu/" />