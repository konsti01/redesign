$("#gc_form input[type=radio]").change(function(){
    if ($("#other_checkbox").prop('checked')){
        $("#other_select").removeAttr('disabled');
        $("#other_blur").slideUp(200);
    } else {
        $("#other_select").attr('disabled', true);
        $("#other_blur").slideDown(200);
    }
});
$("#other_select").change(function(){
    $("#other_bg").css(
        'background-image',
        'url("<?= $_urlPrefix ?>/images/ajandekkartya/meska-ajandekkartya-'+$("#other_select").val()+'-mini.jpg")'
    );
});