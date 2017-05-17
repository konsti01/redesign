var stat;
stat = {
    reg_view: function (product_id, utm_source, utm_medium, quick) {
        if (parseInt(product_id) > 0){
            var fd = new FormData();
            if (quick === true){
                fd.append('method', 'quickview');
            } else {
                fd.append('method', 'view');
            }
            fd.append('id', product_id);
            if (utm_source !== undefined){
                fd.append('utm_source', utm_source);
            }
            if (utm_medium != undefined){
                fd.append('utm_medium', utm_medium);
            }
            var anHttpRequest = new XMLHttpRequest();
            anHttpRequest.open("POST", '/AjaxLoader/stat', true);
            anHttpRequest.send(fd);
        }
    },

    reg_listing: function (place, page) {
        var utm_filled = false;
        var fd = new FormData();
        fd.append('method', 'listing');
        if (parseInt(page) > 0){
            fd.append('page', page);
        }

        var ids = [];

        document.querySelectorAll(place + ' a').forEach(function (element) {
            var href = element.href;
            if (href !== undefined) {
                var m = href.match(/t\d+/);
                if (m !== null) {
                    ids.push(m[0].substr(1));

                    if (!utm_filled) {
                        var qs = m.input.split('?')[1];
                        if (qs !== undefined) {

                            qs.split('&').forEach(function (v) {
                                var param = v.split('=', 2);
                                if (param[0] == 'utm_source') {
                                    fd.append('utm_source', param[1]);
                                    utm_filled = true;
                                }
                                if (param[0] == 'utm_medium') {
                                    fd.append('utm_medium', param[1]);
                                }
                            });
                        }
                    }
                }
            }
        });
        if (ids[0] !== undefined) {
            fd.append('id', ids);
            var anHttpRequest = new XMLHttpRequest();
            anHttpRequest.open("POST", '/AjaxLoader/stat', true);
            anHttpRequest.send(fd);
        }
    }
};

//document.addEventListener('DOMContentLoaded', function() {
    //stat.reg_listing('body');
    //stat.reg_listing('#enahnced_prods', 2);

    //stat.reg_view(123456, 'mainpage', 'JustUploaded');
//});
