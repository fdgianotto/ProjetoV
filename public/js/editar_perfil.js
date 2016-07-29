/**
 * Created by filip on 11/05/2016.
 */
$(document).ready(function () {
    $( "#editar_perfil, #perfil_fechar" ).click(function() {
        $("#perfil_default").slideToggle()  ;
        $("#perfil_edit").slideToggle();
        $("html, body").animate({ scrollTop: 0 }, "fast");
    });
});
