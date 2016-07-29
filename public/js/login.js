/**
 * Created by filip on 11/05/2016.
 */
$(document).ready(function () {
    var click = 0;
    $('#login_link').click(function () {
        $("#login").slideToggle();
        click = click + 1;
        if (click % 2 === 0) {
            $('#icon3').removeClass('glyphicon-chevron-up').addClass("glyphicon-log-in");
            $('#li3').removeClass("active");
        } else {
            $('#icon3').removeClass('glyphicon-log-in').addClass("glyphicon-chevron-up");
            $('#li3').addClass("active");
        }
    });
});