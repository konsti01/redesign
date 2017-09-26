$(document).ready(function () {
        var search_bar = document.getElementById('search-bar');
        var input_content = (search_bar).val();

        if(!$(input_content)){
            $('#search-button').hide();
        }
        else {
            $('#search-button').show();
        }
});