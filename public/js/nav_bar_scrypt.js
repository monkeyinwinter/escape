$(document).ready(function() {

    $('#btn_img_open').hide();


    $('#btn_img_open').click(function() {
        $('#nav_bar_left').css({'margin-left':'0px'});
        $('#btn_img_open').hide();
        $('#btn_img_close').show();
    });
    $('#btn_img_close').click(function() {
        $('#nav_bar_left').css({'margin-left':'-250px'});
        $('#btn_img_close').hide();
        $('#btn_img_open').show();
    });

});