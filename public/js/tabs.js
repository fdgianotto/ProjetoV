/**
 * Created by filip on 11/05/2016.
 */
$(document).ready(function () {
    if($("#tab1").click()) {
        $("#tab2_body, #tab3_body").hide();
    }
    else  if($("#tab2").click()) {
        $("#tab1_body, #tab3_body").toggle();
        $("#tab2_body").toggle();
    }
    else {
        $("#tab1_body, #tab2_body").toggle();
        $("#tab3_body").toggle();
    }
});