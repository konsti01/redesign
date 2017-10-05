/**
 * amik kellenek:
 * ajax_loadable class
 * id
 * data-name -> ez lesz az AjaxLoaderben a metódus neve get_ elotaggal
 * ha data-reg = 1, akkor nem jeleniti meg az eredmenyt, es az AjaxLoaderben nem fuz get_ elotagot a metodushoz (pl reg_product_display)
 */
jQuery(document).ready(function() {
	var data = new Array();
	var item;

	jQuery(".ajax_loadable").each(function(index, element) {
		obj = jQuery(element);

		item = {};
		item.params = {};
		item.divid = obj.attr("id");
		item.name = obj.attr("data-name");

		if (obj.attr("data-reg")) {
			item.reg = 1;
		}

		if (obj.attr("data-shopid")) {
			item.params.shopid = obj.attr("data-shopid");
		}

		if (obj.attr("data-userid")) {
			item.params.userid = obj.attr("data-userid");
		}

		if (obj.attr("data-productid")) {
			item.params.productid = obj.attr("data-productid");
		}

		if (obj.attr("data-count")) {
			item.params.count = obj.attr("data-count");
		}
		data.push(item);
	});

	jQuery.ajax({
		url: "/AjaxLoader/load_merged",
		type: "POST",
		data: {data: data},
		dataType: "json",
		success: function(content) {
			if (content !== '') {
				jQuery.each(content, function(i, e){
					if (e.status === 'ok'){
						if (typeof e.html === 'object' && e.html !== null){
							if (e.html.action === 'hide'){
								jQuery("#" + e.html.element).hide();
							}
							if (e.html.action === 'content'){
								jQuery("#" + e.html.element).html(e.html.html);
							}
						} else {
							jQuery("#" + i).html(e.html);
							jQuery("#" + i).show();
						}
					}
				});
			}
		}
	});

});
