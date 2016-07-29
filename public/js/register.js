/**
 * Created by filip on 11/05/2016.
 */
$(document).ready(function () {
    var click = 0;
    $('#register_link').click(function () {
        $("#register").slideToggle();
        click = click + 1;
        if (click % 2 === 0) {
            $('#icon4').removeClass('glyphicon-chevron-up').addClass("glyphicon-plus");
            $('#li1').addClass("active");
            $('#li4').removeClass("active");
        } else {
            $('#icon4').removeClass('glyphicon-chevron-plus').addClass("glyphicon-chevron-up");
            $('#li1').removeClass("active");
            $('#li4').addClass("active");
        }
    });

});